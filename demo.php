<?php
class Account {
    public function __construct() {

    }

    /**
     * @apiDefine accountGroup 我的账户（DQ）
     */

    /**
     * @api {get} account/profile 个人信息 √
     * @apiName accountprofile
     * @apiGroup accountGroup
     * @apiVersion 2.0.0
     *
     * @apiUse loginFields
     * @apiUse loginExample
     *
     * @apiSuccess {String} avatar
     */
    public function profile() {

    }

    /**
     * @api {get} account/about/:company_id 关于 √
     * @apiName accountabout
     * @apiGroup accountGroup
     * @apiVersion 2.0.0
     *
     * @apiSuccess {Number} hasAgent 0/1
     * @apiSuccess {String} logo
     * @apiSuccess {Array} fields 动态字段
     * @apiSuccess {String} name
     */
    public function about($company_id=0) {

    }

    /**
     * @api {post} account/feedback 反馈 √
     * @apiName accountfeedback
     * @apiGroup accountGroup
     * @apiVersion 2.0.0
     *
     * @apiUse loginFields
     * @apiParam {string{..255}} content 反馈内容
     *
     * @apiUse loginExample
     *
     * @apiError 1000 当日重复提交
     */
    public function feedback() {

    }
}