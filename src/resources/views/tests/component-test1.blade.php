<x-tests.app>
  <x-slot name="header">
    ヘッダー１
  </x-slot>
  コンポーネントテスト１

  <x-tests.card title="タイトル123" content="ここですよ123" :message="$test_message" />
</x-tests.app>