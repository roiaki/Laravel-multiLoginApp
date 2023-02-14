<x-tests.app>
  <x-slot name="header">
    ヘッダー２
  </x-slot>
  コンポーネントテスト2

  <x-test-class-base classBaseMessage="メッセージです1" />
  <div class="mb-4"></div>
  <x-test-class-base classBaseMessage="メッセージです2" defaultMessage="初期値変更"/>

</x-tests.app>