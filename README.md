# [verifyway.com](https://verifyway.com)
WhatsApp OTP API Empower your applications with seamless user verification using VerifyWay's WhatsApp OTP API, ensuring a reliable and convenient authentication process.

## Getting Started with VerifyWay API

Follow these steps to get started with VerifyWay API:

1. **Register**: [Register here](https://verifyway.com/login/?action=register)
2. **Top-up**: [Top-up your account](https://verifyway.com/my-account/walletdashboard/topup/)
3. **Get API Key**: [Retrieve your API Key](https://verifyway.com/my-account/apikey/)
4. **Done!**

### Example API Request

Use the following cURL command to send a request to the VerifyWay API:

```bash
curl -X POST https://api.verifyway.com/api/v1/ \
-H 'Authorization: Bearer API_KEY' \
-H 'Content-Type: application/json' \
-H 'Accept: application/json' \
-d '{
"recipient":"31612345678",
"type":"otp",
"code":"123456"
}'

## API Response Formats

### Success Response

When the request is successful, the API will return a JSON response as follows:

{
    "status": "success",
    "message_id": "RANDOM_ID",
    "recipient": "+31612345678",
    "code": "123456"
}

### Failure Response

When the request fails, the API will return a JSON response as follows:

{
    "error": "detail of the error"
}
