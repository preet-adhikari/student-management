<textarea {{ $attributes->merge([
    'class' => "form-input form-text rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
]) }}>
    {{ $content }}
</textarea>
