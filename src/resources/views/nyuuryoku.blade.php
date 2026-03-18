<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/nyuuryoku.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionabiyLate
      </a>
    </div>
  </header>

  <main>
  
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
            <span class="form__input--text">
              <input type="text" name="name" placeholder="山田" />
              <input type="text" name="name" placeholder="太郎" />
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
            <span class="form__input--text">
              <input type="radio" name="gender" value="1" id="male" {{ old('gender') == '1' ? 'checked' : '' }}>
              <span>男性</span>
              <input type="radio" name="gender" value="2" id="female" {{ old('gender') == '2' ? 'checked' : '' }}>
              <span>女性</span>
              <input type="radio" name="gender" value="3" id="female" {{ old('gender') == '3' ? 'checked' : '' }}>
              <span>その他</span>
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
            <span class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
            <span class="form__input--text">
              <input type="tel" name="tel" placeholder="080" />
            </span>
            <span>-</span>
            <span class="form__input--text">
              <input type="tel" name="tel" placeholder="1234" />
              <span>-</span>
              <span class="form__input--text">
              <input type="tel" name="tel" placeholder="5678" />
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
            <span class="form__input--text">
              <input type="text" name="name" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" />
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物</span>
            <span class="form__label--required">※</span>
            <span class="form__input--text">
              <input type="text" name="name" placeholder="例：千駄ヶ谷マンション101" />
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
            <span class="form__input--text">
            <select name="category" id="category">
            <option value="">選択してください</option>
        
            <option value="意見" {{ old('category') == '意見' ? 'selected' : '' }}>
            ご意見
            </option>
        
            <option value="質問" {{ old('category') == '質問' ? 'selected' : '' }}>
            ご質問
            </option>
        
            <option value="その他" {{ old('category') == 'その他' ? 'selected' : '' }}>
            その他
            </option>
          </select>
            </span>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
            <span span class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
          </span>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
