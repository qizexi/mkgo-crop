移动web图像裁剪插件

主程序名：mkgo-crop.js<br/>
主程序说明：马可波罗旅行html5移动端图片裁剪程序<br/>
作者：qizexi<br/>
邮箱：qizexi@163.com<br/>
公司：马可波罗旅行<br/>
网址：www.mkgo.cn（未上线）<br/>
微信服务号:mkgo-cn<br/>

暂时就叫它裁剪程序吧，说框架似乎有点粗糙。<br/>
裁剪程序的由来：项目需要用到裁剪技术，对用户的图像进行裁剪，<br/>
	但是尝试了网上的一些图片裁剪的程序都不是很理想，<br/>
	要么存在安卓和ios系统的兼容问题，要么就是有些手机上面存在压扁的情况，<br/>
	所以最后决定使用html5+canvas来开发，目前版本的代码比较粗糙，<br/>
	但是裁剪方面是比较完美的。<br/>
	目前只是做了移动端的移动，缩放，就是对触摸事件的监听，电脑端没有实现，<br/>
	感兴趣的朋友可以对程序加以扩展，欢迎一起学习交流。<br/>

使用方式：<br/>
 		var mkCrop = {<br/>
			//图片地址<br/>
			'imgsrc': imgsrc,<br/>
			//图片裁剪确定成功后回调函数<br/>
			'back_fnc': back_fnc,<br/>
			//裁剪左旋转按钮图片路径<br/>
			'leftrimgurl': leftrimgurl,<br/>
			//裁剪右旋转按钮图片路径<br/>
			'rightrimgurl': rightrimgurl,<br/>
			//裁剪完成确定按钮图片路径<br/>
			'okrimgsrc': okrimgsrc,<br/>
			//图片裁剪放置在那个dom节点对象里面<br/>
			'cropparentdom': cropparentdom,<br/>
			//图片预览dom节点对象<br/>
			'preimgdom': preimgdom,<br/>
			//图片裁剪数据信息收集的input对象<br/>
			'cropinputdom': cropinputdom<br/>
		}
		initMkgoCrop(mkCrop);<br/>
		
具体的使用请参考两个例子<br/>
index.html 裁剪图片来源是图片的url<br/>
index-2.html 裁剪的图片来源是拍照或者用户选择的相片信息<br/>
<br/>
示例代码（上传代码已经被屏蔽:)）：<br/>
http://wx1.mkgo.cn/mkgo-crop/index.html<br/>
http://wx1.mkgo.cn/mkgo-crop/index-2.html<br/>
