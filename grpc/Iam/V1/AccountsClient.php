<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\V1;

/**
 * 账号服务
 */
class AccountsClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * 注册账号
     * @param \Iam\V1\AccountRegister $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function AccountCreate(\Iam\V1\AccountRegister $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/AccountCreate',
        $argument,
        ['\Iam\V1\AccessToken', 'decode'],
        $metadata, $options);
    }

    /**
     * 登录：验证身份，发放临时凭证，获得的凭证仅可使用一次且有效时间极短，仅用于换取访问凭证
     * @param \Iam\V1\UserAuth $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function SignUp(\Iam\V1\UserAuth $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/SignUp',
        $argument,
        ['\Iam\V1\RefreshCode', 'decode'],
        $metadata, $options);
    }

    /**
     * 登录：获得主体应用的访问凭证
     * @param \Iam\V1\TokenShort $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function SignIn(\Iam\V1\TokenShort $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/SignIn',
        $argument,
        ['\Iam\V1\AccessToken', 'decode'],
        $metadata, $options);
    }

    /**
     * 用户登陆加密密钥
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UserAuthAESECB(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/UserAuthAESECB',
        $argument,
        ['\Iam\V1\AESECBEncode', 'decode'],
        $metadata, $options);
    }

    /**
     * 用户登陆 v2.0
     * @param \Iam\V1\UserAuth $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UserAuthV2(\Iam\V1\UserAuth $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/UserAuthV2',
        $argument,
        ['\Iam\V1\UserAuthResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 用户登陆刷新 v2.0
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UserAuthRefreshV2(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/UserAuthRefreshV2',
        $argument,
        ['\Iam\V1\UserAuthResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 在指定设备退出当前账号（移除刷新访问凭证）
     * @param \Iam\V1\RefreshToken\Target $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function SignOut(\Iam\V1\RefreshToken\Target $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/SignOut',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * 发起请求验证外部标识符，例如手机短信，发送验证码
     * @param \Iam\V1\SendVerifyCode $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function VerifyCodeSend(\Iam\V1\SendVerifyCode $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/VerifyCodeSend',
        $argument,
        ['\Iam\V1\LimitRate', 'decode'],
        $metadata, $options);
    }

    /**
     * 设置或修改密码
     * @param \Iam\V1\PasswordUpdate $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function SetPassword(\Iam\V1\PasswordUpdate $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/SetPassword',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除密码
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function DelPassword(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/DelPassword',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * PasswordExited 密码存在检查
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function PasswordExited(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/PasswordExited',
        $argument,
        ['\Iam\V1\DoneResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ModifyLinkID 修改另可ID
     * @param \Iam\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ModifyLinkID(\Iam\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/ModifyLinkID',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * LinkIDModifyTime 检测另可ID是否可以修改
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function LinkIDModifyTime(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/LinkIDModifyTime',
        $argument,
        ['\Iam\V1\TimeResp', 'decode'],
        $metadata, $options);
    }

    /**
     * AccountExited 检测账号是否存在
     * @param \Iam\V1\AccountCheck $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function AccountExited(\Iam\V1\AccountCheck $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/AccountExited',
        $argument,
        ['\Iam\V1\DoneResp', 'decode'],
        $metadata, $options);
    }

    /**
     * AccountRemoveCancel 账号注销动作撤销
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function AccountRemoveCancel(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/AccountRemoveCancel',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GenQRCode 生成二维码
     * @param \Iam\V1\QRGenPlatform $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GenQRCode(\Iam\V1\QRGenPlatform $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/GenQRCode',
        $argument,
        ['\Iam\V1\RespQRCode', 'decode'],
        $metadata, $options);
    }

    /**
     * FillQRCodeUserOpenID 回写生成的二维码用户ID
     * @param \Iam\V1\RespQRCodeStep $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function FillQRCodeUserOpenID(\Iam\V1\RespQRCodeStep $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/FillQRCodeUserOpenID',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GetAccounts 查询用户的账号信息
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GetAccounts(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/GetAccounts',
        $argument,
        ['\Iam\V1\RespUserAccounts', 'decode'],
        $metadata, $options);
    }

    /**
     * AccountDelete 注销用户的账号
     * @param \Iam\V1\AccountDeleteReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function AccountDelete(\Iam\V1\AccountDeleteReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/AccountDelete',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateAccount 用户的账号更新
     * @param \Iam\V1\AccountChange $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateAccount(\Iam\V1\AccountChange $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/UpdateAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * VerifyCodeCheck 用户验证码有效性检查
     * @param \Iam\V1\VerifyCodeCheckReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function VerifyCodeCheck(\Iam\V1\VerifyCodeCheckReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/VerifyCodeCheck',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ForgotPassword 用户忘记密码
     * @param \Iam\V1\AccountCheck $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ForgotPassword(\Iam\V1\AccountCheck $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/ForgotPassword',
        $argument,
        ['\Iam\V1\AccountCheckResp', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAccounts 用户账号查询
     * @param \Iam\V1\AccountsSearch $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ListAccounts(\Iam\V1\AccountsSearch $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Accounts/ListAccounts',
        $argument,
        ['\Iam\V1\AccountsResp', 'decode'],
        $metadata, $options);
    }

}
