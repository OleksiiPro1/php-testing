<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Calculator</title>
</head>

<body>
<style>
/* Styles */
.grid-container {
    width: 1270px;
}
.calculator-section label {
    font-size: 22px;
}
.calculator-result-section button {
    padding: 0px 18px;
    background-color: #ffcb00;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 12px;
}
.select-container::after {
    border-top: 5px solid gray;
}
input::placeholder {
    color: #909090;
    font-size: 15px;
}
@media (min-width: 1270px) {
    .page-id-42497 .edge-padding {
        min-width: 1270px;
    }
    .page-id-42497 .trad-smart-calc-container {
        min-width: 1270px;
    }
    .page-id-42497 .calculator-container {
        min-width: 1252px;
    }
}
.calculator-container {
    padding: 30px;
    border-radius: 12px;
    border: solid 2px #8888FF;
    max-width: 1270px;
}
.calculator-section {
    margin-bottom: 25px;
}
.calculator-section h3 {
    font-size: 32px;
    font-weight: 600;
    color: #8888FF;
    margin-bottom: 20px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.calculator-section label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
}
.calculator-section input[type="number"],
.calculator-section select {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 16px;
    box-sizing: border-box;
    transition: border-color 0.3s;
}
.calculator-section input[type="number"]:focus,
.calculator-section select:focus {
    border-color: #8888FF;
    outline: none;
}
.calculator-section .calculated-field {
    padding: 12px;
    border-radius: 8px;
    font-size: 21px;
    color: #ffcb00;
    font-weight: 500;
    text-align: left;
    box-sizing: border-box;
}
.center-calculate-button {
    width: 100%;
    display: flex;
    justify-content: center;
}
button.calculate-button {
    border-radius: 15px;
    padding: 5px;
}
.calculate-button {
    background-color: #ffcb00;
    color: white;
    padding: 15px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    width: 250px;
    text-align: center;
    transition: background-color 0.3s;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-sizing: border-box;
}
@media (max-width: 768px) {
    .calculator-container {
        padding: 20px;
    }
    .calculator-section h3 {
        font-size: 20px;
    }
    .calculator-section input[type="number"],
    .calculator-section select {
        font-size: 14px;
    }
    .calculate-button {
        font-size: 16px;
    }
}
.trad-smart-calc-container {
    margin: 50px auto;
    padding-right: 20px;
    border-radius: 12px;
}
.trad-smart-calc-title {
    text-align: center;
    font-size: 2.5rem;
    color: #8888FF;
    margin-bottom: 20px;
}
.trad-smart-calc-text {
    font-size: 1.125rem;
    margin-bottom: 20px;
}
.trad-smart-calc-highlight {
    font-weight: bold;
    color: #8888FF;
}
.trad-smart-calc-link {
    color: #337ab7;
    text-decoration: none;
    transition: all 0.3s ease;
}
.trad-smart-calc-link:hover {
    color: #2a7d7c;
}
.trad-smart-calc-example {
    padding: 20px;
    border-radius: 10px;
    border-left: 5px solid #ffcb00;
    border-top: solid 1px #ffcb00;
    border-bottom: solid 1px #ffcb00;
    border-right: solid 1px #ffcb00;
    margin-bottom: 20px;
}
.trad-smart-calc-example p {
    margin: 10px 0;
    font-size: 1.1rem;
}
.trad-smart-calc-example-title {
    font-size: 1.5rem;
    color: #ffcb00;
    margin-bottom: 15px;
}
.trad-smart-calc-btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1.125rem;
    color: #fff;
    background-color: #ffcb00;
    border-radius: 8px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}
.trad-smart-calc-btn:hover {
    background-color: #1b5857;
}
.trad-smart-calc-note {
    font-size: 0.95rem;
    color: #777;
    text-align: center;
    margin-top: 20px;
}
@media (max-width: 600px) {
    .trad-smart-calc-container {
        padding: 15px;
    }
    .trad-smart-calc-title {
        font-size: 2rem;
    }
    .trad-smart-calc-text, .trad-smart-calc-example p {
        font-size: 1rem;
    }
    .trad-smart-calc-btn {
        font-size: 1rem;
        padding: 8px 16px;
    }
}
</style>

<div class="trad-smart-calc-container">
    <h1 class="trad-smart-calc-title">The SmartTrader SL/TP Calculator</h1>
    <h2 class="trad-smart-calc-text">Take Control of your trades with the SmartTrader SL/TP calculator</h2>
    <p class="trad-smart-calc-text">Successful trading starts with a well-planned strategy and clearly defined rules. The SmartTrader SL/TP Calculator is designed to help you set your stop loss (SL) and take profit (TP) limits with confidence and ensure that each of your trades is in line with your risk management objectives.</p>
    <p class="trad-smart-calc-text">This tool allows you to easily determine your preferred limits to protect your capital or secure positions while setting your desired risk/reward ratio.</p>
    <p class="trad-smart-calc-text">With the SmartTrader SL/TP Calculator, planning trades and, more importantly, sticking to the fundamentals of risk management has never been easier!</p>
</div>

<div class="calculator-container">
    <div class="calculator-section">
        <h3>SL & TP Calculator</h3>
        <br><br>
        <label for="baseCurrency">Base Currency</label>
        <p>The currency you are trading in</p>
        <select id="baseCurrency" onchange="updateCurrencyLabels()">
            <option value="USD">USD</option>
            <option value="CAD">CAD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
        </select>
    </div>

    <div class="calculator-section">
        <label for="accountBalance">Account Balance (<span id="accountBalanceCurrency">USD</span>)</label>
        <p>Current Balance of your trading account</p>
        <input type="number" id="accountBalance" placeholder="">
    </div>

    <div class="calculator-section">
        <label for="amountToRisk">Amount to Risk (<span id="amountToRiskCurrency">USD</span>)</label>
        <p>The amount you are comfortable risking with this trade</p>
        <input type="number" id="amountToRisk" placeholder="" oninput="updatePercentageText()">
        <p id="amountToRiskPercentage">0% of account balance</p> 
    </div>

    <div class="calculator-section">
        <label for="targetWinnings">Target Winnings (<span id="targetWinningsCurrency">USD</span>)</label>
        <p>The amount you target to gain and then close the trade</p>
        <input type="number" id="targetWinnings" placeholder="" oninput="updatePercentageText()">
        <p id="targetWinningsPercentage">0% of account balance</p>
    </div>

    <div class="calculator-section">
        <label for="tradeType">Trade Direction</label>
        <select id="tradeType">
            <option value="buy">Buy/Long</option>
            <option value="sell">Sell/Short</option>
        </select>
    </div>

    <div class="calculator-section">
        <label for="assetType">Asset Type</label>
        <select id="assetType" onchange="updateAssetOptions()">
            <option value="">Select Asset Type</option>
            <option value="Index">Index</option>
            <option value="Stock">Stock</option>
            <option value="Forex">Forex</option>
        </select>
    </div>

    <div class="calculator-section">
        <label for="asset">Asset</label>
        <select id="asset">
            <!-- Options will be populated dynamically based on the asset type -->
        </select>
    </div>

    <div class="calculator-section">
        <label for="volumeLots">Volume / Amount</label>
        <p>Enter the value of your trade</p>
        <input type="number" id="volumeLots" step="0.1" placeholder="">
    </div>

    <div class="calculator-section">
        <label for="openingPrice">Opening Price (<span id="openingPriceCurrency">USD</span>)</label>
        <p>Enter the opening price</p>
        <input type="number" id="openingPrice" step="0.01" placeholder="">
    </div>
    <div class="center-calculate-button">
        <button class="calculate-button" onclick="calculate()">Calculate</button>
    </div>
    <hr style="margin: 30px 0;">

    <div class="calculator-section">
        <h3>Calculation</h3>
    <div class="calculator-result-section">
    <div style="margin-top: 20px; display: flex; align-items: center; gap: 10px;">
    <label for="pipValue" style="width: 200px; font-size: 18px;">Pip/Point Value (USD)</label>
    <div id="pipValue" class="calculated-field">0.00</div>
</div>

<div style="margin-top: 20px; display: flex; align-items: center; gap: 10px;">
    <label for="slPips" style="width: 200px; font-size: 18px;">SL Pips</label>
    <div id="slPips" class="calculated-field">0.00</div>
</div>

<div style="margin-top: 20px; display: flex; align-items: center; gap: 10px;">
    <label for="tpPips" style="width: 200px; font-size: 18px;">TP Pips</label>
    <div id="tpPips" class="calculated-field">0.00</div>
</div>

<div style="margin-top: 20px; display: flex; align-items: center; gap: 10px;">
    <label for="stopLoss" style="width: 200px;"><b>Stop Loss (SL) at</b></label>
    <div id="stopLoss" class="calculated-field"><b>0.00</b></div>
    <button onclick="copyToClipboard('stopLoss')">Copy</button>
</div>

<div style="margin-top: 20px; display: flex; align-items: center; gap: 10px;">
    <label for="takeProfit" style="width: 200px;"><b>Take-Profit (TP) at</b></label>
    <div id="takeProfit" class="calculated-field"><b>0.00</b></div>
    <button onclick="copyToClipboard('takeProfit')">Copy</button>
</div>

        </div>
    </div>

</div>

<div class="trad-smart-calc-container">
<div class="trad-smart-calc-example">
        <h2 class="trad-smart-calc-example-title">Example: Using the SL & TP Calculator for the S&P 500 (SPX)</h2>
        <p>Let's say you want to trade the S&P 500 index (SPX):</p>
        <p>You decide you are willing to risk <span class="trad-smart-calc-highlight">$100</span> on this trade (this is your "Amount to Risk").</p>
        <p>You aim to make <span class="trad-smart-calc-highlight">$200</span> in profit (this is your "Target Winnings").</p>
        <p>You plan to open a <span class="trad-smart-calc-highlight">Long (Buy)</span> position.</p>
        <p>You select the S&P 500 as the asset and choose to trade <span class="trad-smart-calc-highlight">1 lot</span>.</p>
        <p>The current price of the S&P 500 is <span class="trad-smart-calc-highlight">4,500</span>.</p>
        <p>After entering these details into the calculator and clicking '<span class="trad-smart-calc-highlight">Calculate</span>,' the tool might show:</p>
        <p><span class="trad-smart-calc-highlight">Stop Loss (SL) at: 4,490</span><br>
            This means if the S&P 500 drops to 4,490, your trade will automatically close to prevent further losses, aligning with your $100 risk.</p>
        <p><span class="trad-smart-calc-highlight">Take Profit (TP) at: 4,520</span><br>
            This means if the S&P 500 rises to 4,520, your trade will automatically close to secure your $200 profit.</p>
    </div>
</div>

<script>
let assetData = {};
let gbpToUsdRate = 1.29;  // Default value for GBP/USD, this will be updated from the CSV
let currencyRates = {
    USD: 1,
    CAD: 1.25,  // Example rate, update with actual rates
    EUR: 0.85,  // Example rate, update with actual rates
    GBP: 0.75   // Example rate, update with actual rates
};

document.addEventListener('DOMContentLoaded', function() {
    const sheetUrl = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXxxx=csv";

    fetch(sheetUrl)
        .then(response => response.text())
        .then(data => {
            // Clean the data by trimming and removing any empty lines
            const rows = data.trim().split("\n").map(row => row.trim()).filter(row => row);

            // Populate assetData dynamically
            rows.forEach((row, index) => {
                if (index === 0) return; // Skip header row
                const cells = row.split(",").map(cell => cell.trim());
                if (cells.length > 3) {
                    const asset = cells[0];  // Asset name
                    const decimal = parseFloat(cells[1]);  // Decimal value
                    const exchangeRate = parseFloat(cells[2]);  // Exchange Rate
                    const type = cells[3];  // Asset Type

                    assetData[asset] = {
                        decimal: decimal,
                        exchangeRate: exchangeRate,
                        type: type
                    };

                    // Update GBP/USD rate if the asset is GBP/USD
                    if (asset === "GBP/USD") {
                        gbpToUsdRate = exchangeRate;
                    }
                }
            });
        })
        .catch(error => {
            console.error("Error fetching the data:", error);
        });
});

function updateAssetOptions() {
    const assetType = document.getElementById('assetType').value;
    const assetDropdown = document.getElementById('asset');
    assetDropdown.innerHTML = '';  // Clear previous options

    // Populate the asset dropdown based on the selected asset type
    for (const asset in assetData) {
        if (assetData[asset].type === assetType) {
            const option = document.createElement('option');
            option.value = asset;
            option.text = asset;
            assetDropdown.appendChild(option);
        }
    }
}

function updateCurrencyLabels() {
    const baseCurrency = document.getElementById('baseCurrency').value;

    document.getElementById('accountBalanceCurrency').innerText = baseCurrency;
    document.getElementById('amountToRiskCurrency').innerText = baseCurrency;
    document.getElementById('targetWinningsCurrency').innerText = baseCurrency;
    document.getElementById('openingPriceCurrency').innerText = baseCurrency;
}

function updatePercentageText() {
    const accountBalance = parseFloat(document.getElementById('accountBalance').value);
    const amountToRisk = parseFloat(document.getElementById('amountToRisk').value);
    const targetWinnings = parseFloat(document.getElementById('targetWinnings').value);

    if (accountBalance > 0) {
        let amountToRiskPercentage = (amountToRisk / accountBalance) * 100;
        document.getElementById("amountToRiskPercentage").innerText = amountToRiskPercentage.toFixed(2) + "% of account balance";

        let targetWinningsPercentage = (targetWinnings / accountBalance) * 100;
        document.getElementById("targetWinningsPercentage").innerText = targetWinningsPercentage.toFixed(2) + "% of account balance";
    } else {
        document.getElementById("amountToRiskPercentage").innerText = "0% of account balance";
        document.getElementById("targetWinningsPercentage").innerText = "0% of account balance";
    }
}

function calculate() {
    const baseCurrency = document.getElementById('baseCurrency').value;
    const conversionRate = currencyRates[baseCurrency];

    const accountBalance = parseFloat(document.getElementById('accountBalance').value);
    const amountToRisk = parseFloat(document.getElementById('amountToRisk').value) * conversionRate;
    const targetWinnings = parseFloat(document.getElementById('targetWinnings').value) * conversionRate;
    const tradeType = document.getElementById('tradeType').value;
    const asset = document.getElementById('asset').value;
    const volumeLots = parseFloat(document.getElementById('volumeLots').value);
    const openingPrice = parseFloat(document.getElementById('openingPrice').value);

    // Validate inputs
    if (isNaN(accountBalance) || accountBalance <= 0 ||
        isNaN(amountToRisk) || amountToRisk < 0 ||
        isNaN(targetWinnings) || targetWinnings < 0 ||
        isNaN(volumeLots) || volumeLots <= 0 ||
        isNaN(openingPrice) || openingPrice <= 0) {
        alert('Please enter valid numbers for all fields.');
        return;
    }

    const assetInfo = assetData[asset];
    if (!assetInfo) {
        alert('Asset data not found.');
        return;
    }

    let pipValue, slPips, tpPips;

    if (assetInfo.type === "Index") {
        pipValue = assetInfo.exchangeRate * Math.pow(10, -assetInfo.decimal);
        slPips = amountToRisk / (volumeLots * pipValue);
        tpPips = targetWinnings / (volumeLots * pipValue);
    } else if (assetInfo.type === "Stock") {
        pipValue = 1;
        slPips = amountToRisk / (volumeLots * pipValue);
        tpPips = targetWinnings / (volumeLots * pipValue);
    } else if (assetInfo.type === "Forex") {
        const baseCurrencyOfPair = asset.split('/')[0];
        const baseCurrencyToUsdRate = currencyRates[baseCurrencyOfPair] || 1;

        pipValue = ((assetInfo.decimal / assetInfo.exchangeRate) * (volumeLots * 100000)) * baseCurrencyToUsdRate;
        // pipValue = ((assetInfo.decimal / assetInfo.exchangeRate) * (volumeLots * 100000)) * 1.6469;
        console.log('assetInfo.decimal =', assetInfo.decimal);
        console.log('assetInfo.exchangeRate =',assetInfo.exchangeRate);
        console.log('volumeLots =',volumeLots);
        console.log('baseCurrencyToUsdRate =',baseCurrencyToUsdRate);
        console.log('pipValue =',pipValue + '= ((' + assetInfo.decimal +'/'+ assetInfo.exchangeRate+') * ('+volumeLots+' * 100000)) * '+baseCurrencyToUsdRate);
        slPips = amountToRisk / pipValue * 0.0001;
        tpPips = targetWinnings / pipValue * 0.0001;
    }

    let slPrice, tpPrice;

    if (tradeType === 'buy') {
        slPrice = openingPrice - slPips;
        tpPrice = openingPrice + tpPips;
    } else {
        slPrice = openingPrice + slPips;
        tpPrice = openingPrice - tpPips;
    }

    const decimalPlaces = assetInfo.type === "Forex" ? 5 : 2;

    document.getElementById('pipValue').innerText = pipValue.toFixed(2);
    document.getElementById('slPips').innerText = slPips.toFixed(decimalPlaces);
    document.getElementById('tpPips').innerText = tpPips.toFixed(decimalPlaces);
    document.getElementById('stopLoss').innerText = slPrice.toFixed(decimalPlaces);
    document.getElementById('takeProfit').innerText = tpPrice.toFixed(decimalPlaces);
}
</script>

</body>
</html>
