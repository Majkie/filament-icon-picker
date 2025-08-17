<div class="flex flex-col items-center justify-center">
	<div class="relative w-full flex flex-row justify-start gap-2">
		<div class="relative w-12 h-12 grow-1 shrink-0 gap-1">
			<x-filament::icon
{{--				alias="filament-icon-picker::topbar.global-search.field"--}}
				icon="{{$icon}}"
				class="w-full h-full"
			/>
		</div>
		<small class="w-full text-center grow-0 shrink-0 h-4 truncate">{{$icon}}</small>
	</div>
</div>
