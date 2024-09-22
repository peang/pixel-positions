<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$999.99" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com " />
        <x-forms.checkbox label="Featured" name="featured"></x-forms>

            <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="developer, laravel" />

            <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
