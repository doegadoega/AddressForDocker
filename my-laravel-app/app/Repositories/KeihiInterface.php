<?php

interface KeihiInterface
{
    /**
     * 取得
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * 一覧取得
     * @return mixed
     */
    public function getList();

    /**
     * 更新処理
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * 新規登録
     * @param $data
     * @return mixed
     */
    public function cateate($data);

    /**
     * 削除
     * @param $id
     * @return mixed
     */
    public function delete($id);

}