$entity = \Bitrix\Iblock\Model\Section::compileEntityByIblock($iblockId);
        $dbSect = $entity::getList([
            "select" => ['UF_*'], // пользовательские поля
            "filter" => ['ID' => $itemId],
        ]);
        if ($arSect = $dbSect->fetch()) {
            $parentDeputy = $arSect['UF_DEPUTY'];
        }
        return $parentDeputy;
