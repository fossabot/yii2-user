<?php

/*
 * This file is part of the Dektrium project
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var yii\web\View $this
 * @var SomeBlackMagic\Yii2User\Models\User $user
 */
?>

<?php $this->beginContent('@SomeBlackMagic/Yii2User/Views/admin/update.php', ['user' => $user]) ?>

<table class="table">
    <tr>
        <td><strong><?= Yii::t('user', 'Registration time') ?>:</strong></td>
        <td><?= Yii::t('user', '{0, date, MMMM dd, YYYY HH:mm}', [$user->createdAt]) ?></td>
    </tr>
    <?php if ($user->registrationIp !== null): ?>
        <tr>
            <td><strong><?= Yii::t('user', 'Registration IP') ?>:</strong></td>
            <td><?= $user->registrationIp ?></td>
        </tr>
    <?php endif ?>
    <tr>
        <td><strong><?= Yii::t('user', 'Confirmation status') ?>:</strong></td>
        <?php if ($user->isConfirmed): ?>
            <td class="text-success">
                <?= Yii::t('user', 'Confirmed at {0, date, MMMM dd, YYYY HH:mm}', [$user->confirmedAt]) ?>
            </td>
        <?php else: ?>
            <td class="text-danger"><?= Yii::t('user', 'Unconfirmed') ?></td>
        <?php endif ?>
    </tr>
    <tr>
        <td><strong><?= Yii::t('user', 'Block status') ?>:</strong></td>
        <?php if ($user->isBlocked): ?>
            <td class="text-danger">
                <?= Yii::t('user', 'Blocked at {0, date, MMMM dd, YYYY HH:mm}', [$user->blockedAt]) ?>
            </td>
        <?php else: ?>
            <td class="text-success"><?= Yii::t('user', 'Not blocked') ?></td>
        <?php endif ?>
    </tr>
</table>

<?php $this->endContent() ?>
