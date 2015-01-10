<div class="container-fluid">
    <div class="row header">
        <div class="col-md-2">Id</div>
        <div class="col-md-2">Date</div>
        <div class="col-md-2">Currency from</div>
        <div class="col-md-2">Currency to</div>
        <div class="col-md-2">Rate</div>
    </div>
    {foreach from=$logs  item=log}
    <div class="row row-log">
        <div class="col-md-2">{$log->getId()}</div>
        <div class="col-md-2">{$log->getDate()->format('Y-m-d H:i:s')}</div>
        <div class="col-md-2">{$log->getCurrencyFrom()}</div>
        <div class="col-md-2">{$log->getCurrencyTo()}</div>
        <div class="col-md-2">{$log->getRate()}</div>
    </div>
    {/foreach}
</div>