<x-tests.app>
    <x-slot name="header">ヘッダー</x-slot>

  コンポーネントテスト１

  <x-tests.card title="タイトル1" content="本文1" :message="$message"/>
  <x-tests.card title="タイトル2" />
</x-tests.app>