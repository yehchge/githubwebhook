# 與 GitHub 串接的 WebHook #

1. 串接時使用 ngrok 在本機產生 https 對外網址
2. 在 github 內選擇一個專案, 選擇 add webhook, 
   輸入 secret value 及 ngrok 產生的 https 網址.
3. 選擇 issues 的 webhook 功能.
4. 之後在該專案產生一個 issues, 本機應該能收到
   GitHub 回傳的 Issues JSON 格式的資料.

