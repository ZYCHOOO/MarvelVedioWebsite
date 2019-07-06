# MarvelVedioWebsite
一个基于web的漫威观影网站，页面是使用了BOOTSTRAP框架，其中在观影页面使用了vedio.js和danmu.Player.js两个插件。系统的主要界面分为主页面、观影页面、用户浏览新闻页面、用户登陆注册页面。
## 页面及其功能
* 开始页面：用户点击进入主页面
* 主页面：用户进行登录注册，并在轮播图中进入电影或电视剧观影页面
* 电影页面：用户在副标题中选择电影，进入播放页面
* 电视剧页面：同上
* 电影播放页面：用户可发送弹幕
* 电视剧播放页面：用户可进行选集功能
* 新闻页面：未完善(href="#nowhere")
### Vedio.js
video.js是一款基于HTML5的网络视频播放器。它支持HTML5和Flash视频，以及YouTube和Vimeo（通过插件）。支持在桌面和移动设备上播放视频。这个项目从2010年中期开始，现已经在40多万个网站上使用。
### DanmuPlayer.js
Danmmu Player是一个轻量级具备弹幕功能的Html5视频播放器，仅63KB大小。
具备弹幕视频播放，接受用户发送彩色弹幕，实时调解弹幕显示效果等功能。
Danmmu Player意在使开发者能便捷的在网站中实现弹幕视频播放。参考至[click here](https://github.com/chiruom/DanmuPlayer/)
### 未完善的功能
* 发送的弹幕未能存入数据库
* 使用danmuplayer.js插件未能实现选集功能
* 新闻页面没有接口
* 用户登陆后未能在原处显示用户名(session)
