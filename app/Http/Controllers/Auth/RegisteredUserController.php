use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// ...

public function store(Request $request): RedirectResponse
{
    $request->validate([
        'name' => ['required', 'string', 'max', '255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max', '255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // TARUH KODE INI DI SINI (Otomatis set role mahasiswa)
    $user->assignRole('mahasiswa');

    event(new Registered($user));

    Auth::login($user);

    // Kita arahkan ke dashboard umum dulu
    return redirect(route('dashboard', absolute: false));
}