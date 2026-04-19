import React from "react";
import ReactDOM from "react-dom/client";

function App() {
    const el = document.getElementById("app");
    const dbStatus = el.getAttribute("data-status");

    const isDBConnected = dbStatus === "connected";

    return (
        <div style={{
            display: "flex",
            gap: "20px",
            padding: "40px",
            fontFamily: "Arial"
        }}>
            
            {/* DB Status */}
            <div style={{
                background: isDBConnected ? "green" : "red",
                color: "white",
                padding: "12px 20px",
                borderRadius: "10px"
            }}>
                {isDBConnected ? "✅ DB Connected" : "❌ DB Not Connected"}
            </div>

            {/* React Status */}
            <div style={{
                background: "#2563eb",
                color: "white",
                padding: "12px 20px",
                borderRadius: "10px"
            }}>
                ⚛️ React Integrated Successfully
            </div>

        </div>
    );
}

ReactDOM.createRoot(document.getElementById("app")).render(<App />);