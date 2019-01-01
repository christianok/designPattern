# 23种设计模式模型陆续更新中...

## 一 **软件开发原则**

### 1.单一职责原则
_这个原则看似简单，它是说有且仅有一个原因引起一个类的改变。实则很难，因为很难确定单一的界限，同样的类
换成不同的业务逻辑则有不同的单一定义。窃以为，在实际开发中只需要做到"适可而止"，切不可"穷凶极恶"的追求
单一职责。_
### 2.里氏替换原则
_子类出现的地方父类一定能出现，反之则不一定。这样的主要好处就是能极大的提升代码的复用性，以及高扩展性。_
### 3.依赖倒置原则
_该原则包含三层含义：
1、高层模块不应该依赖低层模块，两者都应该依赖其抽象；
2、抽象不应该依赖细节；
3、抽象不应该依赖细节；_
### 4.接口隔离原则
_可理解为四层含义：
1、接口要尽可能小；
2、接口要要高内聚；
3、个细化服务；
4、接口的设计要有限度_
### 5.迪米特法则
_也称为最少知识原则。一个对象应该对其他对象有最少的了解。
通俗地讲，一个类应该对自己需要耦合或调用的类知道得最少，你（被耦合或调用的类）的内部是如何复杂都和我没关系，
那是你的事情，我就知道你提供的这么多public方法，我就调用这么多，其他的我一概不关心
     
    摘自：《设计模式之禅》 — 秦小波
    在豆瓣阅读书店查看：https://read.douban.com/ebook/945176/
    本作品由华章数媒授权豆瓣阅读全球范围内电子版制作与发行。
    © 版权所有，侵权必究。_
    
### 6.开闭原则
Software entities like classes,modules and functions should be open for extension but closed 
for modifications.（一个软件实体如类、模块和函数应该对扩展开放，对修改关闭。）其含义是说一个软件实体
应该通过扩展来实现变化，而不是通过修改已有的代码来实现变化

    摘自：《设计模式之禅》 — 秦小波
    在豆瓣阅读书店查看：https://read.douban.com/ebook/945176/
    本作品由华章数媒授权豆瓣阅读全球范围内电子版制作与发行。
    © 版权所有，侵权必究。
    
## 二 各种设计模式大观

####第1章 单例模式
####第2章 工厂方法模式
####第3章 抽象工厂模式
####第4章 模板方法模式
####第5章 建造者模式
####第6章 代理模式
####第7章 原型模式
####第8章 中介者模式
####第9章 命令模式
####第10章 责任链模式
####第11章 装饰模式
####第12章 策略模式
####第13章 适配器模式
####第14章 迭代器模式
####第15章 组合模式
####第16章 观察者模式
####第17章 门面模式
####第18章 备忘录模式
####第19章 访问者模式
####第20章 状态模式
####第21章 解释器模式
####第22章 享元模式
####第23章 桥梁模式