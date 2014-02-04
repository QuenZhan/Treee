# Tree Style Forum

## 創世紀

1. 這個世界有了「葉子」。
1. 有一個特別、永生的葉子叫做「根」
1. 一段時間，有個葉子從這個「根」長了出來
1. 一段時間，這個葉子漸漸枯萎
1. 但是，他身上又孕育了一個新生的葉子，他獲得了生存的意志。
1. 又有更多的葉子從「根」、這個「葉子」與這個葉子的子孫孕育而生。
1. 雖然位於最末端沒有子嗣漸漸的凋零，但整個「樹」仍然逐漸壯大的

## 核心概念

* 每篇文章都是相同的地位，沒有階層（主題、回應、推文）之分
* 每篇文章都必須要與一個也只能一個葉子連結，也可解釋為父子關係
* 每片葉子都有固定的壽命，一段時間後將會凋零（由資料庫刪去
* 但擁有子孫的葉子，不會隨時間被刪去，直到所有子孫都凋零之後，才開始計算自己壽命
* 最源頭的葉子，就是「根」，是永生的沒有壽命。

## 衛星概念

* 非會員制，使用者不需登入；注重事件本身，不住重人際
* 利用壽命的機制作獎懲，鼓勵有價值的文章持續保存，自動刪去乏人問津、被時代拋棄的文章
* 介面簡潔
* 容易使用、容易分享、容易閱讀、跨平台

## 使用插件

* 漢字 Css resset
* Bootstrap : frontend framework
* Parse : backend

## Pages : Url Alias Api

* domainName
* domainName/[leaf-od]
* domainName/about

## domainName/[leaf-od]

### 要素

1. fixed topbar
1. parent leaf
1. self leaf
1. sibling leaves
1. children leaves
1. newLeaf : form

### Fixed topbar

需含有

* Breadcrumbs ： 方便使用者知道階層
* Treee Icon ：回首頁
* self Leaf 斷章取意：擷取直到第一個/n為止

## Backend Database Leaf 

Fildd 		| Type 		| Description
----- 		| ---- 		| ---
parent id 	| id		| parrent leaf
content 	| string	| 內文
age			| number	| 壽命（天
views		| number	| 瀏覽次數
clicks		| nubmer	| 點擊次數