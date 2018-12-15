<?php
function getTreeInfo(Branch $branch)
{
    $infos = $branch->getSubordinate();
    $info = "";
    foreach ($infos as $info) {
        if ($info instanceof Leaf) {
            $info .= $info;
        }else {
            $info .= getTreeInfo($info);
        }
    }
    return $info;
}