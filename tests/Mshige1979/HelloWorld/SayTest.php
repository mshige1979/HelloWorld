<?php
// 名前空間定義
namespace Mshige1979\HelloWorld\Tests;

// ライブラリを指定
use Mshige1979\HelloWorld\Say;

// テスト用クラス
class SayTest extends \PHPUnit_Framework_TestCase{
	
	// ==================================================	
	// 機能毎にテストメソッドを記載
	// ==================================================
	// helloメソッドのテスト
	public function testHello(){
		$data = Say::hello();
		$this->assertEquals('hello', $data);
	}

	// lenメソッドのテスト
	public function testLen(){
		$data = Say::len("1234567890");
		$this->assertEquals(10, $data);
	}

}

