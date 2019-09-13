<h1 style="background: black; color: white; padding: 1em; font-family: Verdana;">
    Eugênio AVA
</h1>

<p style="font-family: Verdana;">
    Clique aqui para resetar a sua senha: <br/>
    <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">
        {{ $link }}
    </a>
</p>

<div style="background: black; color: white; padding: 1em; font-family: Verdana;">
</div>

