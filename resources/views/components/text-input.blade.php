@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-surface-container border-white/10 text-white focus:border-primary-container focus:ring-primary-container rounded-md shadow-sm']) }}>
