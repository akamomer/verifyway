# verifyway
WhatsApp OTP API Empower your applications with seamless user verification using VerifyWay's WhatsApp OTP API, ensuring a reliable and convenient authentication process.

1- Rgeister: https://verifyway.com/login/?action=register
2- Then Top-up: https://verifyway.com/my-account/walletdashboard/topup/
3- Get API Key: https://verifyway.com/my-account/apikey/
4- Done!

curl -X POST https://api.verifyway.com/api/v1/ \
-H 'Authorization: Bearer API_KEY' \
-H 'Content-Type: application/json' \
-H 'Accept: application/json' \
-d '{
"recipient":"31612345678",
"type":"otp",
"code":"123456"
}'


