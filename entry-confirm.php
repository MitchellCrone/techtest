<?php
use yii\helpers\Html;
?>
<p>Here is your data as a cheque:</p>

<div class="Cheque">
    <div class="Cheque-upper">
        <div class="left">
        BANK NAME
        </div>
        <div class="right">
            DATE &nbsp;<u><?= Html::encode($model->date) ?></u>
        </div>
    </div>
    <div class="Cheque-middle">
        
        <div class="flex justify">
            <div class="left">
                PAY TO THE ORDER OF&nbsp;<u><?= Html::encode($model->payee) ?></u>&nbsp;
            </div>
            <div class="right">
                <div class="flex">
                &pound;
                </div>
                <div class="amount-box">
                    <?= Html::encode($model->amount) ?>
                </div>
            </div>
        </div>
        <div class="flex">
            THE SUM OF &nbsp;<u> <?= Html::encode($model->amount) ?> </u>&nbsp; POUNDS
        </div>
        <div class="flex">
            
        </div>
    </div>
    <div class="Cheque-lower">
        <div class="left">
            MEMO &nbsp;<u><?= Html::encode($model->memo) ?></u>
        </div>
        <div class="right">
            <u><?= Html::encode($model->name) ?></u>
        </div>
    </div>
</div>

<style>
    .Cheque {
        display: flex;
        flex-direction: column;
        border: 1px solid black;
        height: 240px;
        width: 800px;
        background: linear-gradient(180deg, #6864ff 0%, #fff 75%);
  font-family: 'Courier New', monospace;
  padding:5px;
    }
    .Cheque-upper {
        display: flex;
        padding: 20px;
        height: 60px;
        justify-content: space-between;
    }
    .Cheque-middle {
        display: flex;
        height: 130px;
        padding: 20px;
        justify-content: space-between;
        flex-direction: column;
    }
    .Cheque-lower {
        display: flex;
        padding: 20px;
        height: 50px;
        justify-content: space-between;
    }
    .amount-box {
        width:150px;
        height:40px;
        border: 1px solid black;
        background-color: white;
        text-align:center;
        margin-left: 10px;
    }

    .left {
        display:flex;
    }
    .right {
        display:flex;
    }

    }
    .column {
        display: flex;
        flex-direction: column;
    }
    .flex {
        display:flex;
    }
    .justify {
        
        justify-content: space-between;
    }
    u{
        font-family: 'Brush Script MT', cursive;
    font-size: 1.25rem;
    }
</style>