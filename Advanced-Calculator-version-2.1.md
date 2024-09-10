<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Calculator</title>
</head>

<body>
<style>

button.trad-accordion-button {
    width: 100%;
}

.trad-accordion-button {
    background-color: #f7f7f7;
    border: none;
    padding: 15px;
    width: 100%;
    text-align: left;
    font-weight: bold;
    cursor: pointer;
}

.trad-accordion-button.collapsed {
    background-color: #8888FF;
    
}

.trad-accordion-content {
    
    margin-top: 5px;
}

.trad-accordion-header {
    margin-bottom: 10px;
}




p#targetWinningsPercentage {
    color: gray;
}

p#amountToRiskPercentage {
    color: gray;
}

@media only screen and (min-width: 1270px) {
.grid-container {
    width: 1270px;
}
}
    .calculator-section label {
    font-size: 22px;
}

.calculator-result-section button {
   
    padding: 0px 35px;
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
} .page-id-42497 .trad-smart-calc-container {
    min-width: 1270px;
}

   .page-id-42497 .calculator-container {
    min-width: 1252px;
}
/* .calculator-result-section {
    display: flex;
    justify-content: space-evenly;
} */
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
            padding: 0 20px 1px 0;
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
           
            border-radius: 12px;
            
        }

        .trad-smart-calc-title {
            text-align: center;
            font-size: 2.5rem;
            color: #8888FF;
            margin-bottom: 20px;
            margin-top: -80px;
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

.flex-padding-copy {
    display: flex;
    padding-bottom: 5px;
}



    </style>





<div class="trad-smart-calc-container">
    <h1 class="trad-smart-calc-title">SmartTrader Stop Loss (SL) & Take Profit (TP) Calculator
</h1>
    <p class="trad-smart-calc-text">Manage your risk effectively and secure your trades with a custom risk/reward ratio.</p>
    
    <p class="trad-smart-calc-text">The SmartTrader SL & TP Calculator is the most user-friendly and comprehensive tool available. It helps you quickly determine how much you could lose or gain if your chosen Stop Loss (SL) or Take Profit (TP) levels are reached.</p>

    <p class="trad-smart-calc-text">With this tool, planning your trades and adhering to key risk management principles becomes effortless.</p>
    
   
</div>

<div class="calculator-container">
    <div class="calculator-section">
        <h3>SmartTrader SL & TP Calculator</h3>
        <br><br>
        <label for="baseCurrency">Select account currency</label>
        <p><i>Select the currency of your trading account (e.g., USD, EUR); Currently only USD available</i></p>
        <select id="baseCurrency" onchange="updateCurrencyLabels()">
            <option value="USD">USD</option>
            <option value="CAD">CAD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
        </select>
    </div>

    <div class="calculator-section">
        <label for="accountBalance">Your current account balance </label>
        <p id="enter-account-balance-in-usd"><i>Enter your current account balance (in USD)</i></p>
        <input type="number" id="accountBalance" placeholder="" oninput="updatePercentageText()">
    </div>

    <div class="calculator-section">
        <label for="amountToRisk">Maximum amount to Risk in this trade </label>
        <p id="max-amount-in-usd"><i>Specify the maximum amount you're willing to risk on this trade (in USD)</i></p>
        <input type="number" id="amountToRisk" placeholder="" oninput="updatePercentageText()">
        <p id="amountToRiskPercentage">This equals <span style="color: red;">0%</span> of your account balance </p> 
    </div>

   
    <div class="calculator-section">
        <label for="targetWinnings">Target profit of this trade</label>
        <p>The amount you target to gain and then close the trade</p>
        <input type="number" id="targetWinnings" placeholder="" oninput="updatePercentageText()">
        <p id="targetWinningsPercentage">This equals <span style="color: green;">0%</span> of your account balance</p>
    </div>


    <div class="calculator-section">
        <label for="tradeType">Trade Direction</label>
        <select id="tradeType">
            <option value="buy">Buy/Long</option>
            <option value="sell">Sell/Short</option>
        </select>
    </div>

    <div class="calculator-section">
    <label for="assetType">Select the Asset TYPE of your trade</label>
    <select id="assetType" onchange="updateAssetOptions(); updateAssetText(); updateAssetText2();">
        <option value="">Select Asset Type</option>
        <option value="Index">Index</option>
        <option value="Stock">Stock</option>
        <option value="Forex">Forex</option>
    </select>
    <p id="assetTypeMessage" style="display: none; color: gray;">It doesn't matter which stock you are trading - just enter the right current price of the stock in the “Enter the opening price” field.</p>
</div>

<script>
function updateAssetText() {
    const assetType = document.getElementById('assetType').value;
    const assetTypeMessage = document.getElementById('assetTypeMessage');

    if (assetType === 'Stock') {
        assetTypeMessage.style.display = 'block'; // Показываем текст для "Stock"
    } else {
        assetTypeMessage.style.display = 'none'; // Скрываем текст для "Index" и "Forex"
    }
}
</script>


    <div class="calculator-section">
        <label for="asset">Choose the exact Asset</label>
        <select id="asset">
            <!-- Options will be populated dynamically based on the asset type -->
        </select>
    </div>

    <div class="calculator-section">
        <label for="volumeLots">Enter your trade volume</label>
        <p>Enter the value of your trade</p>
        <input type="number" id="volumeLots" step="0.1" placeholder="">
<p id="volumeLotsMessage" style="display: none; color: gray;">For Forex, input the lot size; for stocks, the number of shares; for indices, the number of contracts.</p>
    </div>
   <script>
function updateAssetText2() {
    const assetType2 = document.getElementById('assetType').value;
    const volumeLotsMessage = document.getElementById('volumeLotsMessage');

    if (assetType2 === 'Forex') {
        volumeLotsMessage.style.display = 'block'; // Показываем текст для "Stock"
    } else {
        volumeLotsMessage.style.display = 'none'; // Скрываем текст для "Index" и "Forex"
    }
}
</script>

    <div class="calculator-section">
        <label for="openingPrice">Enter the opening price</label>
        <p>Input the asset’s current market price (at opening)</p>
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
            <label for="pipValue" style="width: 200px; font-size: 18px;">Pip/Point Value</label>
            <div id="pipValue" class="calculated-field">0.00</div>
        </div>

        <div style="margin-top: 20px; display: flex; align-items: center; gap: 10px;">
            <label for="slPips" style="width: 200px; font-size: 18px;">Pips/Points away from entry price for SL</label>
            <div id="slPips" class="calculated-field">0.00</div>
        </div>

        <div style="margin-top: 20px; display: flex; align-items: center; gap: 10px;">
            <label for="tpPips" style="width: 200px; font-size: 18px;">Pips/Points away from entry price for TP</label>
            <div id="tpPips" class="calculated-field">0.00</div>
        </div>

        <div style="margin-top: 20px; align-items: center; gap: 10px;">
            <label for="stopLoss"><b>Your Stop Loss (SL) should be set at:</b></label>
            <div class="flex-padding-copy"><div id="stopLoss" class="calculated-field"><b>0.00</b></div>
            <button onclick="copyToClipboard('stopLoss')">COPY VALUE</button></div>
<p><i>copy this value and paste it into field “Stop Loss” (SL)</i><p>
        </div>

        <div style="margin-top: 20px; align-items: center; gap: 10px;">
            <label for="takeProfit"><b>Your Take Profit (TP) should be set at:</b></label>
            <div class="flex-padding-copy"><div id="takeProfit" class="calculated-field"><b>0.00</b></div>
            <button onclick="copyToClipboard('takeProfit')">COPY VALUE</button></div>
            <p><i>copy this value and paste it into field “Take Profit” (TP)</i><p>
        </div>
    </div>
</div>


</div>

<div class="trad-smart-calc-container">
    <div class="trad-accordion">
        <div class="trad-accordion-item">
            <h2 class="trad-accordion-header">
                <button class="trad-accordion-button" type="button" aria-expanded="true" onclick="toggleAccordion(this)">
                    Example 1: Using the SL & TP Calculator for the S&P 500 (SP500)
                </button>
            </h2>
            <div class="trad-accordion-content" style="display: block;">
                <div class="trad-smart-calc-example">
                    <p>Let's say you want to trade the S&P 500 index (SP500):</p>
                    <p>You decide you are willing to risk <span class="trad-smart-calc-highlight">$100</span> on this trade (this is your “Amount to Risk”).</p>
                    <p>You aim to make <span class="trad-smart-calc-highlight">$200</span> in profit (this is your “Target Winnings”).</p>
                    <p>You plan to open a <span class="trad-smart-calc-highlight">Long (Buy)</span> position.</p>
                    <p>You select the S&P 500 as the asset and choose to trade <span class="trad-smart-calc-highlight">1 lot</span>.</p>
                    <p>The current price of the S&P 500 is <span class="trad-smart-calc-highlight">4,500</span>.</p>
                    <p>After entering these details into the calculator and clicking ‘<span class="trad-smart-calc-highlight">Calculate</span>,’ the tool might show:</p>
                    <p><span class="trad-smart-calc-highlight">Stop Loss (SL) at: 4,490</span></p>
                    <p><span class="trad-smart-calc-highlight">Take Profit (TP) at: 4,520</span></p>
                </div>
            </div>
        </div>

        <div class="trad-accordion-item">
            <h2 class="trad-accordion-header">
                <button class="trad-accordion-button collapsed" type="button" aria-expanded="false" onclick="toggleAccordion(this)">
                    Example 2: Using the SL & TP Calculator for Apple (AAPL)
                </button>
            </h2>
            <div class="trad-accordion-content" style="display: none;">
                <div class="trad-smart-calc-example">
                    <p>Let's say you want to trade Apple stocks:</p>
                    <p>You decide to risk <span class="trad-smart-calc-highlight">$200</span> on this trade (“Amount to Risk”).</p>
                    <p>You aim for a <span class="trad-smart-calc-highlight">$400</span> profit (“Target Winnings”).</p>
                    <p>You plan to open a <span class="trad-smart-calc-highlight">Long (Buy)</span> position.</p>
                    <p>You select AAPL as the asset and trade <span class="trad-smart-calc-highlight">1 lot</span> (100 shares).</p>
                    <p>The current price of AAPL is <span class="trad-smart-calc-highlight">$150</span>.</p>
                    <p>After entering these details into the calculator and clicking ‘<span class="trad-smart-calc-highlight">Calculate</span>,’ the tool might show:</p>
                    <p><span class="trad-smart-calc-highlight">Stop Loss (SL) at: $148</span></p>
                    <p><span class="trad-smart-calc-highlight">Take Profit (TP) at: $154</span></p>
                </div>
            </div>
        </div>

        <div class="trad-accordion-item">
            <h2 class="trad-accordion-header">
                <button class="trad-accordion-button collapsed" type="button" aria-expanded="false" onclick="toggleAccordion(this)">
                    Example 3: Using the SL & TP Calculator for EUR/USD
                </button>
            </h2>
            <div class="trad-accordion-content" style="display: none;">
                <div class="trad-smart-calc-example">
                    <p>Let's say you want to trade the EUR/USD currency pair:</p>
                    <p>You decide you are willing to risk <span class="trad-smart-calc-highlight">$50</span> on this trade (“Amount to Risk”).</p>
                    <p>You aim to make <span class="trad-smart-calc-highlight">$100</span> in profit (“Target Winnings”).</p>
                    <p>You plan to open a <span class="trad-smart-calc-highlight">Long (Buy)</span> position.</p>
                    <p>You select EUR/USD as the asset and choose to trade <span class="trad-smart-calc-highlight">0.1 lots</span> (10,000 units).</p>
                    <p>The current price of EUR/USD is <span class="trad-smart-calc-highlight">1.2000</span>.</p>
                    <p>After entering these details into the calculator and clicking ‘<span class="trad-smart-calc-highlight">Calculate</span>,’ the tool might show:</p>
                    <p><span class="trad-smart-calc-highlight">Stop Loss (SL) at: 1.1950</span></p>
                    <p><span class="trad-smart-calc-highlight">Take Profit (TP) at: 1.2100</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function toggleAccordion(button) {
    const content = button.parentElement.nextElementSibling;
    const isExpanded = button.getAttribute('aria-expanded') === 'true';

    if (isExpanded) {
        content.style.display = 'none';
        button.setAttribute('aria-expanded', 'false');
        button.classList.add('collapsed');
    } else {
        // Close all other accordions
        document.querySelectorAll('.accordion-content').forEach(function (content) {
            content.style.display = 'none';
        });

        document.querySelectorAll('.accordion-button').forEach(function (btn) {
            btn.setAttribute('aria-expanded', 'false');
            btn.classList.add('collapsed');
        });

        // Open the clicked accordion
        content.style.display = 'block';
        button.setAttribute('aria-expanded', 'true');
        button.classList.remove('collapsed');
    }
}
</script>











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
    const sheetUrl = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=csv";

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

    // Debug: Check if the baseCurrency is selected correctly
    console.log("Selected currency:", baseCurrency);

    // Debug: Check if the elements are being accessed
    const accountBalanceElem = document.getElementById('enter-account-balance-in-usd');
    const maxAmountElem = document.getElementById('max-amount-in-usd');

    console.log("Account Balance Element:", accountBalanceElem);
    console.log("Max Amount Element:", maxAmountElem);

    // Check if the elements exist before trying to update them
    if (accountBalanceElem) {
        accountBalanceElem.innerHTML = `<i>Enter your current account balance (in ${baseCurrency})</i>`;
        console.log("Updated account balance text.");
    } else {
        console.log("Account balance element not found.");
    }

    if (maxAmountElem) {
        maxAmountElem.innerHTML = `<i>Specify the maximum amount you're willing to risk on this trade (in ${baseCurrency})</i>`;
        console.log("Updated max amount text.");
    } else {
        console.log("Max amount element not found.");
    }
}



function updatePercentageText() {
    const accountBalanceInput = document.getElementById('accountBalance').value;
    const amountToRiskInput = document.getElementById('amountToRisk').value;
    const targetWinningsInput = document.getElementById('targetWinnings').value;

    // Проверка значений: если значение пустое или некорректное, присваиваем 0
    const accountBalance = parseFloat(accountBalanceInput) || 0;
    const amountToRisk = parseFloat(amountToRiskInput) || 0;
    const targetWinnings = parseFloat(targetWinningsInput) || 0;

    // Обновляем процент только если баланс больше 0
    if (accountBalance > 0) {
        let amountToRiskPercentage = (amountToRisk / accountBalance) * 100;
        let amountToRiskText = amountToRiskPercentage.toFixed(2) + "% of account balance";

        // Проверка превышения 5%
        if (amountToRiskPercentage > 5.04) {
            amountToRiskText += ' <span style="color: red;">(exceeds 5% – consider reducing your risk to adhere to safe trading practices)</span>';
        }

        document.getElementById("amountToRiskPercentage").innerHTML = amountToRiskText;

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

    // Определение baseCurrencyToUsdRate на основе валютной пары
    let baseCurrencyToUsdRate;
    if (assetInfo.type === "Forex") {
        const [baseCurrencyOfPair, quoteCurrencyOfPair] = asset.split('/');
        
        // Установить курс для базовой валюты на основе данных из CSV файла
        baseCurrencyToUsdRate = assetData[baseCurrencyOfPair + "/USD"] ? assetData[baseCurrencyOfPair + "/USD"].exchangeRate : 1;
        
        // Проверка на исключительные случаи, когда базовая валюта USD
        if (baseCurrencyOfPair === "USD") {
            baseCurrencyToUsdRate = 1;
        }

        // Рассчитать pipValue для Forex
        pipValue = ((assetInfo.decimal / assetInfo.exchangeRate) * (volumeLots * 100000)) * baseCurrencyToUsdRate;


        console.log('assetInfo.decimal =', assetInfo.decimal);
        console.log('assetInfo.exchangeRate =',assetInfo.exchangeRate);
        console.log('volumeLots =',volumeLots);
        console.log('baseCurrencyToUsdRate =',baseCurrencyToUsdRate);
        console.log('pipValue =',pipValue + '= ((' + assetInfo.decimal +'/'+ assetInfo.exchangeRate+') * ('+volumeLots+' * 100000)) * '+baseCurrencyToUsdRate);


        // slPips = amountToRisk / pipValue * 0.0001;
        // tpPips = targetWinnings / pipValue * 0.0001;

        // Determine the multiplier for SL and TP pips calculation
        if (["AUD/USD", "EUR/USD", "GBP/USD", "NZD/USD", "USD/CAD", "EUR/GBP", "EUR/AUD", "EUR/CAD", 
            "GBP/CHF", "EUR/CHF", "USD/SGD", "USD/HKD", "EUR/NZD", "AUD/NZD", "GBP/AUD", 
            "USD/TRY", "USD/ZAR", "USD/CHF", "CAD/USD"].includes(asset)) {
            
            slPips = amountToRisk / pipValue * 0.0001;
            tpPips = targetWinnings / pipValue * 0.0001;
        } 
        else if (["USD/JPY", "EUR/JPY", "GBP/JPY", "CHF/JPY", "AUD/JPY", "CAD/JPY", "NZD/JPY"].includes(asset)) {
            
            slPips = amountToRisk / pipValue * 0.01;
            tpPips = targetWinnings / pipValue * 0.01;
        }

    } else if (assetInfo.type === "Index") {
        pipValue = assetInfo.exchangeRate * Math.pow(10, -assetInfo.decimal);
        slPips = amountToRisk / (volumeLots * pipValue);
        tpPips = targetWinnings / (volumeLots * pipValue);
    } else if (assetInfo.type === "Stock") {
        pipValue = 1;
        slPips = amountToRisk / (volumeLots * pipValue);
        tpPips = targetWinnings / (volumeLots * pipValue);
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

function copyToClipboard(elementId) {
    // Get the text content of the specified element
    const textToCopy = document.getElementById(elementId).innerText;

    // Create a temporary input element to hold the text
    const tempInput = document.createElement('input');
    document.body.appendChild(tempInput);
    
    // Set the input's value to the text content
    tempInput.value = textToCopy;
    
    // Select the text field
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices
    
    // Copy the text inside the text field
    document.execCommand('copy');
    
    // Remove the temporary input element
    document.body.removeChild(tempInput);
    
    // Provide feedback to the user (optional)
    alert('Copied: ' + textToCopy);
}


</script>

</body>
</html>
