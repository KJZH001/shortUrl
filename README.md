# 短网址Api

一句话的介绍:这是一个可以搭建网址缩短Api的php程序
<br>本源码采用GPL v3协议,您可以在保留版权信息与原站地址以及开源修改过的源码情况下免费使用本源码
<br>如果你需要进行更深一步的修改，请联系我们获取商业授权，但是我们不希望您将本程序用于商业用途

## 上手指南

以下指南将帮助你在本地机器上安装和运行该项目，进行开发和测试。关于如何将该项目部署到在线环境，请参考部署小节。

### 安装要求

1.PHP环境为php7.1.13及以上（php低级版本仅在php5.4测试运行正常，其他版本尚未测试）
<br>2.服务器剩余空间至少20MB
<br>3.MYSQL数据库空间剩余至少5MB

### 安装步骤

1.将本项目的master分支克隆并解压在你的服务器根目录
<br>2.在您的数据库中创建一个名为 dwz 的表，并且将其创建 id 和 url 字段用于保存数据
<br>id的属性保持默认，但是请添加A_I属性（自动增值），url的属性请将内容类型修改为TEXT
<br>3.使用notepad++打开 /global/global.php按照注释修改相关内容并保存
<br>修改/my/php/post.php中的第25行中的地址为您的地址并保存
<br>4.绑定域名解析，生效后再浏览器中打开http://你的域名/index.php?class=index

## DEMO

官方源站 http://api.rcraft.ml/api/dwz/?class=index
<br>图片预览 2019.10.04
<br>![图一](http://download.weiyun.com/note_attachment/122439363965623939642d646566372d343238652d383730372d66376665333935336163306118f8aaa7b60c?cmd=248901&amp;fname=QQ%E6%B5%8F%E8%A7%88%E5%99%A8%E6%88%AA%E5%9B%BE20191004215545.png&amp;size=64) 

*由于时间以及更新延迟等关系，您安装的可能和图片以及官网中的样式有所区别*
<br>*此外，为了避免版权问题，内置数据仅提供基本的内容*

## 分流地址

GitHub https://github.com/KJZH001/shortUrl
<br>码云 Gitee https://gitee.com/rcraft/shortUrl
<br>晓空iApp手册_官方Q群 661246868

## 发布地址以及其他说明

http://blog.rcraft.ml/index.php/2019/10/05/20/15/28/219/


## 测试

如果看到没有报错并且正常输出内容时即为正常的安装完成。
<br>如果您发现源码没有正常的如预期中的样子执行，请前往/global/global.php中修改配置，并将调试模式开启。

## 部署

和安装步骤相同，但是在部分服务器上可能会出现数据输出为空的情况，这是由于在代码中使用了中文所导致的，请自行修改相关的代码。

## 使用到的框架

MDUI - Web框架

## 贡献者

请阅读**CONTRIBUTING.md** 查阅为该项目做出贡献的开发者。

## 作者

晓空（贴吧@KJZH001）
*您也可以在贡献者名单中参看所有参与该项目的开发者。*

## 版权说明

本源码采用GPL v3协议，您可以在保留版权信息与原站地址以及开源修改过的源码情况下免费使用本源码，
<br>和本源码有关的相关内容，如无特殊说明则一律遵循 知识共享署名-相同方式共享 4.0 国际许可协议 进行许可。
<br>有关GPL v3开源协议的中文说明，请阅读 https://gitee.com/oschina/git-osc/wikis/License 中的GPL v3协议部分
<br>如果您向我们获取商业授权，则您在授权有效期内不受此限制
<br>
<br>此外，除了在本页面中所注明的下载地址以外，其他地方均为盗版
<br>本项目为免费开源项目，严禁盗卖！


## 鸣谢

详情请见 http://blog.rcraft.ml/index.php/about/

