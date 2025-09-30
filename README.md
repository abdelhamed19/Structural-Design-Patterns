# Structural Design Patterns

This repository demonstrates different **Structural Design Patterns** in PHP.  
Structural patterns focus on how classes and objects are composed to form larger structures while keeping them flexible and efficient.

---

## Implemented Patterns

<details>
<summary>### 1. Adapter Pattern</summary>

**Intent:**  
The Adapter Pattern allows objects with incompatible interfaces to work together.  
It acts as a bridge between the old system and the new one.

**Practical Example:**  
We had an old messaging system (`OldClass`) with its own methods for validating numbers and sending messages.  
A new messaging service (`NewClass`) was introduced with extra features and a slightly different interface.  

Instead of rewriting the old system, we used an **Adapter (`MessengerAdaptorClass`)** to make it compatible with the modern interface (`MessengerInterface`).  

---

### 📂 Project Structure (For Adapter)

```text
Src/
└── Adapter/
    ├── Interfaces/
    │   └── MessengerInterface.php
    ├── OldServiceMessenger/
    │   └── OldClass.php
    ├── NewServiceMessenger/
    │   └── NewClass.php
    ├── Adapters/
    │   └── MessengerAdaptorClass.php
    └── MessengerClass.php
```

---

### 🚀 How It Works

1. **MessengerInterface** → Defines the contract (validate number, validate message, send).  
2. **OldClass** → Legacy system with old validation logic.  
3. **MessengerAdaptorClass** → Converts the old system methods into the new interface.  
4. **NewClass** → New implementation that directly implements `MessengerInterface`.  
5. **MessengerClass** → Client class that depends only on `MessengerInterface`, without caring if it’s old or new.  

---

### 🖥️ Example Usage

```php
$old = new OldClass('Hello old class', '0123456789');
$oldAdaptor = new MessengerAdaptorClass($old);

$new = new NewClass('Hello new class', '0123456789', '123');

$oldMessenger = new MessengerClass($oldAdaptor);
echo $oldMessenger->sendMessage();

$newMessenger = new MessengerClass($new);
echo $newMessenger->sendMessage();

Message Hello old class is being sent by old services to 0123456789
Message Hello new class is being sent by new services to 0123456789 with client id 123