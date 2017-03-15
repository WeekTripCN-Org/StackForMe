# Static后期静态绑定 例子
> 从PHP5.3开始，PHP增加了后期静态绑定的功能，用于继承范围内引用静态调用的类，即在类的继承过程中，使用的类不再是当前类，而是调用类。

## 例子
  - 例1
  
        <?php
           class A {
                public static function call()
                {
                    echo "class A <br/>";
                }
                public static function test()
                {
                    self::call();
                    static::call();
                }
           }
           
           class B extends A {
                public static function call() 
                {
                    echo "class B <br>";
                }
           }
           
           B :: test();
           输出:   
           class A (self::的值是在定义时就确定下来了)
           class B (static::的值只有在调用时才能确定)
           
  - 例2 

		<?php
		   class A {
		        public function call()
		        {
		            echo "instance from A <br>";
		        }
		        public function test()
		        {
		            self::call();
		            static::call();
		        }
		   }
		   class B extends A {
		        public function call()
		        {
		            echo "instance from B <br>";
		        }
		   }
		    
		   $b = new B();
		   $b->test();
		   输出：
		   instance from A
		   instance from B
  - 总结
     > static 会根据运行时调用的类来决定实例化对象，而self是根据所在位置的类来决定实例化对象。
      
      
