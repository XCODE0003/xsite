
@php
    $user = filament()->auth()->user();

@endphp

<x-filament-widgets::widget class="fi-account-widget">
    <x-filament::section>
        <div class="flex items-center gap-x-3">
            <x-filament-panels::avatar.user size="lg" :user="$user"/>

            <div class="flex-1">
                <h2
                    class="grid flex-1 text-base font-semibold leading-6 text-gray-950 dark:text-white"
                >
                    Добро пожаловать {{ filament()->getUserName($user) }}
                </h2>

                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Ваш баланс - {{ $user->balance }} руб
                </p>
            </div>

            <div
                class="my-auto flex flex-col gap-3"
            >
                @csrf

                <x-filament::modal>

                    <x-slot name="trigger">
                        <x-filament::button
                            color="success"
                            icon="heroicon-m-circle-stack"
                            labeled-from="sm"
                            tag="button"
                            type="submit">
                            Пополнить баланс
                        </x-filament::button>
                    </x-slot>

                    <x-slot name="header">
                        Пополнить баланс
                    </x-slot>
                    <form class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2">
                            <x-filament::input.wrapper>

                                <x-filament::input
                                    type="text"
                                    wire:model="amount"
                                    placeholder="Введите сумму"
                                />
                            </x-filament::input.wrapper>
                        </div>

                        <x-filament::button
                            color="gray"
                            type="submit"
                        >
                            Пополнить
                        </x-filament::button>
                    </form>
                </x-filament::modal>
                <x-filament::modal>

                    <x-slot name="trigger">
                        <x-filament::button
                            color="gray"
                            icon="heroicon-m-chevron-double-down"
                            labeled-from="sm"
                            tag="button"
                            type="submit"
                        >
                            Вывести средства
                        </x-filament::button>
                    </x-slot>

                    <x-slot name="header">
                        Вывести средства
                    </x-slot>
                    <form class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2">
                            <x-filament::input.wrapper>

                                <x-filament::input
                                    type="text"
                                    wire:model="amount"
                                    placeholder="Введите сумму"
                                />
                            </x-filament::input.wrapper>
                        </div>

                        <x-filament::button
                            color="gray"
                            type="submit"
                        >
                            Оставить заявку
                        </x-filament::button>
                    </form>
                </x-filament::modal>


            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
