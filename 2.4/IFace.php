<?php
interface IFace{
    // @return 字符串
    function StringMethod();

    /**
     * @param string $intProp
     * @return int
     */
    function numMethod($intProp);

    // 不使用 return
    function NoReturnMethod();
}