<x-layout>
    <x-page-heading>Sign In</x-page-heading>

    <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <x-forms.button>Login</x-form>
    </x-forms.form>
</x-layout>
