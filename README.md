# aws-s3-url-signer-php
Create AWS S3 url parameters to upload directly from browser

> Sample Output

```json
{
   "signature":{
      "Content-Type":"",
      "acl":"public-read-write",
      "success_action_status":"201",
      "policy":"eyJleHBpcmF0aW9uIjoiMjAxNy0xMC0xMlQxkkslNzoyOVoiLCJjb25kaXRpb25zIjpbeyJidWNrZXQiOiJtdsdfjhfW1iZGEtc291cmNlLXZpZGVvIn0seyJhY2wiOiJwdWJsaWMtcmVhZC13cml0ZSJ9LFsic3RhcnRzLXdpdGgiLCIka2V5IiwiIl0sWyJzdGFydHMtd2l0aCIsIiRDb250ZW50LVR5cGUiLCIiXSxbImNvbnRlbnQtbGVuZ3RergaJhbmdlIiwwLDUyNDI4ODAwMF0seyJzdWNjZXNzX2FjdGlvbl9zdGF0dXMiOiIyMDEifSx7IngtYW16LWNyZWRlbnRpYWwiOiJBS0lBSU0zUjRFRcbssaTEFMT1lEUVwvMjAxNzEwMTJcL3VzLXdlc3QtMlwvczNcL2F3czRfcmVxdWVzdCJ9LHsieC1hbXotYWxnb3JpdGhtIjoiQVdTNC1ITUFDLVNIQTI1NiJ9LHsieC1hbXotZGF0ZSI6IjIwMTcxMDEyVDqweeffcyOVoifV19",
      "X-amz-credential":"AALFAIM3WEIIUPLALOYDQ\/20171012\/us-west-2\/s3\/aws4_request",
      "X-amz-algorithm":"AWS4-HMAC-SHA256",
      "X-amz-date":"20171012T054729Z",
      "X-amz-signature":"5227d84360d92ef8al45549805b347725342f1d6641df8986aamcr939c35513cd7c",
      "key":""
   },
   "postEndpoint":"\/\/s3-us-west-2.amazonaws.com\/my-bucket"
}
```
