<label>
	<# if ( data.label ) { #>
		<span class="butterbean-label">{{ data.label }}</span>
	<# } #>

	<# if ( data.description ) { #>
		<span class="butterbean-description">{{{ data.description }}}</span>
	<# } #>

	<input {{{ data.attr }}} data-alpha-enabled="true" data-default-color="rgba(0,0,0,0.85)" value="<# if ( data.value ) { #>{{ data.value }}<# } #>" />
</label>
