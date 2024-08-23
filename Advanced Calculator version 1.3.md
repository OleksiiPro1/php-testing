<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Calculator</title>
</head>

<body>
<style>



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
.calculator-result-section {
    display: flex;
    justify-content: space-evenly;
}
}

        .calculator-container {
            padding: 30px;
            
            border-radius: 12px;
            border: solid 2px #8888FF;
            max-width: 800px;
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
    <h1 class="trad-smart-calc-title">SL & TP Calculator Guide</h1>
    <p class="trad-smart-calc-text">Trading can be risky if you don't plan each trade carefully. Use this calculator to determine where to place your stop loss and take profit levels, ensuring your trade aligns with your trading and risk management strategy.</p>

    <p class="trad-smart-calc-text"><span class="trad-smart-calc-highlight">Here's how to use the calculator:</span></p>
    <p class="trad-smart-calc-text">Start by filling out the “Amount to Risk” field with the amount in USD that you are comfortable losing on this trade.</p>
    <p class="trad-smart-calc-text">Next, enter the “Target Winnings” with the amount in USD you aim to gain from this trade.</p>
    <p class="trad-smart-calc-text">Indicate whether you are opening a Long (Buy) or Short (Sell) position.</p>
    <p class="trad-smart-calc-text">Then, select the asset you are trading and the number of lots you are trading.</p>
    <p class="trad-smart-calc-text">If you're unsure about the appropriate lot size, check out our lot size calculator here: <a class="trad-smart-calc-link" href="https://smarttrader.community/lot-size-calculator/" target="_blank" rel="noopener">Lot Size Calculator</a></p>
    <p class="trad-smart-calc-text">Enter the price at which you plan to open your trade, then click '<span class="trad-smart-calc-highlight">Calculate</span>'.</p>
    <p class="trad-smart-calc-text">The fields <span class="trad-smart-calc-highlight">“Stop Loss (SL) at”</span> and <span class="trad-smart-calc-highlight">“Take Profit (TP) at”</span> will display the levels where you should place your stop loss and take profit to match your chosen risk and reward targets.</p>

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












<div class="calculator-container">
    <div class="calculator-section">
        <h3>SL & TP Calculator</h3>
        <br><br>
        <label for="accountBalance">Account Balance (USD)</label>
        <input type="number" id="accountBalance" placeholder="Current Balance of your trading account">
    </div>

    <div class="calculator-section">
        <label for="amountToRisk">Amount to Risk (USD)</label>
        <input type="number" id="amountToRisk" placeholder="The amount you are comfortable risking with this trade">
    </div>

    <div class="calculator-section">
        <label for="targetWinnings">Target Winnings (USD)</label>
        <input type="number" id="targetWinnings" placeholder="The amount you target to gain and then close the trade">
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
        <input type="number" id="volumeLots" step="0.1" placeholder="Enter the value of your trade">
    </div>

    <div class="calculator-section">
        <label for="openingPrice">Opening Price (USD)</label>
        <input type="number" id="openingPrice" step="0.01" placeholder="Enter the opening price">
    </div>
    <div class="center-calculate-button">
        <button class="calculate-button" onclick="calculate()">Calculate</button>
    </div>
    <hr style="margin: 30px 0;">

    <div class="calculator-section">
        <h3>Calculation</h3>
        <div class="calculator-result-section">
            <div style="margin-top: 20px;">
                <label for="pipValue">Pip/Point Value (USD)</label>
                <div id="pipValue" class="calculated-field">0.00</div>
            </div>

            <div style="margin-top: 20px;">
                <label for="slPips">SL Pips</label>
                <div id="slPips" class="calculated-field">0.00</div>
            </div>

            <div style="margin-top: 20px;">
                <label for="tpPips">TP Pips</label>
                <div id="tpPips" class="calculated-field">0.00</div>
            </div>

            <div style="margin-top: 20px;">
                <label for="stopLoss">Stop Loss (SL) at</label>
                <div id="stopLoss" class="calculated-field">0.00</div>
            </div>

            <div style="margin-top: 20px;">
                <label for="takeProfit">Take-Profit (TP) at</label>
                <div id="takeProfit" class="calculated-field">0.00</div>
            </div>
        </div>
    </div>
</div>

<script>
let assetData = {};
let gbpToUsdRate = 1.29;  // Default value for GBP/USD, this will be updated from the CSV

document.addEventListener('DOMContentLoaded', function() {
    const sheetUrl = "https://docs.google.com/xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=csv";

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

function calculate() {
    const accountBalance = parseFloat(document.getElementById('accountBalance').value);
    const amountToRisk = parseFloat(document.getElementById('amountToRisk').value);
    const targetWinnings = parseFloat(document.getElementById('targetWinnings').value);
    const tradeType = document.getElementById('tradeType').value;
    const asset = document.getElementById('asset').value;
    const volumeLots = parseFloat(document.getElementById('volumeLots').value);
    const openingPrice = parseFloat(document.getElementById('openingPrice').value);

    if (isNaN(accountBalance) || isNaN(amountToRisk) || isNaN(targetWinnings) ||
        isNaN(volumeLots) || isNaN(openingPrice)) {
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
        pipValue = ((assetInfo.decimal / assetInfo.exchangeRate) * (volumeLots * 100000)) * gbpToUsdRate;
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

    document.getElementById('pipValue').innerText = pipValue.toFixed(2);
    document.getElementById('slPips').innerText = slPips.toFixed(5);
    document.getElementById('tpPips').innerText = tpPips.toFixed(5);
    document.getElementById('stopLoss').innerText = slPrice.toFixed(2);
    document.getElementById('takeProfit').innerText = tpPrice.toFixed(2);
}
</script>
</body>

</html>
