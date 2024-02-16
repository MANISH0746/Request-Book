<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification Link</title>

</head>

<body style="font-family: Arial, sans-serif;background-color: #ffffff;margin: 0;padding: 0;">
    <div class="container" style="max-width: 600px;margin: 0 auto;">
        {{--  <img class="logo" src="https://apply.urbanlogic.io/mail/logo.png" alt="Urbanlogic-logo" style="padding: 0 24px;">  --}}
        <p class="header"
            style="font-size: 36px;line-height: 28px;font-weight: 700;color: black;padding-top: 32px;text-align: center;">
            Verify Your Email</p>
        <p class="subHead"
            style="font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;text-align: center;">Please click
            on the given link to verify your email address</p>
        <div class="content" style="padding: 32px 24px;">
            <p style="font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;">Hi&nbsp;<span class="spanText"
                    style="font-weight: 700;color: #000000;">{{ $name }}</span>,</p>
            <p style="font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;">Thank you for registering
                with
                UrbanLogic. To ensure the security of your account and to provide you
                with
                the best experience, we require you to verify your email address.</p>
            <p style="font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;">Please click the following
                link to verify your email address:</p>
            <p style="font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;"><a class="link"
                    href="{{ $verificationLink }}" style="color: red;text-decoration: none;">Verification Link</a></p>
            <p style="font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;">If the link above does not
                work, you can copy and paste the following URL into your web browser: <a class="verifyLink"
                    href="{{ $verificationLink }}" style="color: red;text-decoration: none;">{{ $verificationLink }}</a>
            </p>
            <p style="font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;">If you have any questions or
                need assistance, our friendly support team is here to help. Just drop us a
                line at <span class="spanText"
                    style="font-weight: 700;color: #000000 !important;text-decoration: none;">help@urbanlogic.com</span>
            </p>
            <p style="padding-top:24px; margin:0;font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;">
                Best
                regards,</p>
            <p style="margin:0;font-size: 14px;line-height: 28px;font-weight: 600;color: #333333;">UrbanLogic Teams</p>
        </div>
    </div>
</body>

</html>
