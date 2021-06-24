{{ $data["lastname"] }} 様

お問い合わせありがとうございます。
以下の内容で受け付けました。

===========================

お名前： {{ $data["lastname"] }} {{ $data["firstname"] }}

お名前(カナ)： {{ $data["lastname_kana"] }} {{ $data["firstname_kana"] }}

生年月日： {{ $data["birthday_year"] }}年{{ $data["birthday_month"] }}月{{ $data["birthday_day"] }}日

性別： {{ $data["gender"] }}

学年： {{ $data["school_year"] }}

学校名： {{ $data["school_name"] }}

郵便番号： {{ $data["postalcode"] }}

住所： {{ $data["address"] }}

保護者名： {{ $data["parentname"] }}

電話番号： {{ $data["tel"] }}

メールアドレス： {{ $data["email"] }}

現在所属するチーム名： {{ $data["teamname"] }}

スクール参加希望日： {{ $data["participation_year"] }}年{{ $data["participation_month"] }}月{{ $data["participation_day"] }}日

コース： {{ $data["cose"] }}

ご要望などメッセージ： {{ $data["freearea"] }}

============================