<x-tests.app>
  <x-slot name="header">
    ヘッダー１
  </x-slot>
  コンポーネントテスト１

  <x-tests.card title="タイトル1" content="ここですよ123" :message="$test_message" />
  <x-tests.card title="タイトル2" />
  <x-tests.card title="CSS変更" class="bg-red-300"/>
</x-tests.app>