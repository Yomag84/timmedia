<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New TIMMedia Contact Message</title>
</head>
<body style="margin:0;padding:0;background:#f5f7fb;font-family:Arial,sans-serif;color:#1f2937;">
    <table width="100%" cellspacing="0" cellpadding="0" style="padding:24px 0;">
        <tr>
            <td align="center">
                <table width="620" cellspacing="0" cellpadding="0" style="max-width:620px;width:100%;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e5e7eb;">
                    <tr>
                        <td style="background:#0f2d5e;padding:20px 24px;">
                            <h1 style="margin:0;font-size:20px;line-height:1.3;color:#ffffff;font-weight:800;">TIMMedia Contact Message</h1>
                            <p style="margin:6px 0 0;color:#dbeafe;font-size:13px;">A new enquiry was submitted from the TIMMedia website.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px;">
                            <table width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                                <tr>
                                    <td style="padding:10px 0;border-bottom:1px solid #eef2f7;width:160px;color:#6b7280;font-size:13px;font-weight:600;">Name</td>
                                    <td style="padding:10px 0;border-bottom:1px solid #eef2f7;color:#111827;font-size:14px;">{{ $data['name'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px 0;border-bottom:1px solid #eef2f7;width:160px;color:#6b7280;font-size:13px;font-weight:600;">Email</td>
                                    <td style="padding:10px 0;border-bottom:1px solid #eef2f7;color:#111827;font-size:14px;">{{ $data['email'] }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px 0;border-bottom:1px solid #eef2f7;width:160px;color:#6b7280;font-size:13px;font-weight:600;">Phone</td>
                                    <td style="padding:10px 0;border-bottom:1px solid #eef2f7;color:#111827;font-size:14px;">{{ $data['phone'] ?? 'Not provided' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px 0;border-bottom:1px solid #eef2f7;width:160px;color:#6b7280;font-size:13px;font-weight:600;">Subject</td>
                                    <td style="padding:10px 0;border-bottom:1px solid #eef2f7;color:#111827;font-size:14px;">{{ $data['subject'] }}</td>
                                </tr>
                            </table>

                            <div style="margin-top:20px;background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;padding:16px;">
                                <p style="margin:0 0 8px;color:#6b7280;font-size:13px;font-weight:600;">Message</p>
                                <p style="margin:0;color:#111827;font-size:14px;line-height:1.65;white-space:pre-line;">{{ $data['message'] }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:14px 24px;background:#f8fafc;border-top:1px solid #eef2f7;">
                            <p style="margin:0;color:#6b7280;font-size:12px;">Sent via TIMMedia website contact form.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
