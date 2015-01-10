{if isset($val.errors)}
    <table class="table"><tbody>
            {foreach from=$val.errors item=el}
                <tr class="table-hover error">
                    <td>{$el}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/if}
{if isset($val.rate)}
    <table class="table">
        <thead>
            <tr>
                <td>From:</td>
                <td>To:</td>
                <td>Rate:</td>
                <td>Average:</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="column">{$val.rate.from}</td>
                <td class="column">{$val.rate.to}</td>
                <td class="column">{$val.rate.rate|round:4}</td>
                <td class="column">{$val.rate.avg|round:4}</td>
            </tr>
        </tbody>
    </table>
{/if}
{$form}
{include file='./logs.tpl'}