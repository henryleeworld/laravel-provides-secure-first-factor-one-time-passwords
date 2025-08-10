# Laravel 12 提供安全第一個因素的一次性密碼

引入 benbjurstrom 的 otpz 套件來擴增提供安全第一個因素的一次性密碼，一次性密碼透過要求自動產生一個只有帳號持有人知道的臨時密碼，協助保護帳號免受未經授權的存取。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/7xSOXnL.png)
> 一次性密碼會透過註冊的電子郵件地址傳送給使用者

![](https://i.imgur.com/d7CQ2Xr.png)
> 一次性密碼只在設定的時間內有效一次

![](https://i.imgur.com/ub9Ruqk.png)
> 使用者在必填欄位中輸入一次性密碼來驗證身份
