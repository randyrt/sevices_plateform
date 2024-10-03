{{-- Component input --}}
<div class="mb-3 form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <input 
        id="{{ $id }}" 
        name="{{ $name }}" 
        type="{{ $type }}" 
        placeholder="{{ $placeholder }}" 
        value="{{ old($name) }}"  
        @class([
            "form-control", 
            "is-invalid" => $errors->has($name)
        ])
    >
    
    @error($name)
        <small class="text-danger text-start d-block w-100">{{ $message }}</small>
    @enderror
</div>


 
{{-- script for the type password ?? text --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const passwordInputs = document.querySelectorAll('#passwordInput1, #passwordInput2, #passwordInput3');
        const toggleCheckbox = document.getElementById('toggleCheckbox');

        toggleCheckbox.addEventListener('change', () => {
            passwordInputs.forEach(each_input => {
                each_input.type = toggleCheckbox.checked ? 'text' : 'password';
            });
        });
    });
</script>




