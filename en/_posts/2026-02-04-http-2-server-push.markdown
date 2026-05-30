---
layout: post
title: "HTTP/2 and HTTP/2 Server Push"
author: debi
date: 2026-02-04 13:31:43 +0700
image: /assets/img/utp-cable-engineer.webp
categories: software development
tags: protocol server
related_post: related-posts.html
language: en
locale: en_US
lang: en
toc: true
excerpt: "HTTP/2 is the first iteration of the HTTP protocol which was developed from [SPDY][spdy], an Google-initiated protocol. Currently, HTTP/2 is full supported by web standards and compatible with almost all modern browsers including Chrome, Firefox, Safari, and Edge."
description: "HTTP/2 is the first iteration of the HTTP protocol which was developed from [SPDY][spdy], an Google-initiated protocol. Currently, HTTP/2 is full supported by web standards and compatible with almost all modern browsers including Chrome, Firefox, Safari, and Edge."
---

### HTTP/2

_HTTP/2_ is the first iteration of the HTTP protocol which was developed from [SPDY][spdy], an Google-initiated protocol. Currently, HTTP/2 is full supported by web standards and compatible with almost all modern browsers including Chrome, Firefox, Safari, and Edge.

![HTTP/2 Connection](https://dikakaryatech.com/assets/img/http2-connection.png "HTTP/2 Connection")

The key benefits of HTTP/2 over its predecessor (HTTP/1.1) are improved performance and security. The following are some of the key advantages from this protocol:

- Backward compatible with HTTP/1.1
- Data compression at HTTP headers using HPACK algorithms.
- Multiplexing multiple requests (over a single TCP connection)
- HTTP/2 Server Push

### HTTP/2 Server Push

_HTTP/2 Server Push_ is one of the innovative HTTP/2 features designed to speed up page loading time.Here's how it works: the server proactively sends resource before the client browser request them. This feature is ideally used for pushing static data assets, such as CSS, Javascript, images, and other web assets.

![HTTP/2 Server Push](https://dikakaryatech.com/assets/img/http2-server-push.png "HTTP/2 Server Push")

So, can Server Push be used to push dynamic data such as JSON, XML, or similar formats? Technically, yes, but this goes against the primary purpose of Server Push itself, and the results won’t be optimal.

It is caused HTTP/2 Server Push not pure bidirectional. The data that is pushed by server actually distributed into browser cache, so that the client should do request to get data that pushed by server.

Therefore, HTTP/2 Server Push is not a replacement for WebSockets. WebSockets remain the best solution for intensive bidirectional communication between servers and clients.

[spdy]: https://tools.ietf.org/html/draft-mbelshe-httpbis-spdy-00

{% if page.related_post %}
{% include {{ page.related_post }} %}
{% endif %}
