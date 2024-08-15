# MagedIn_TrojanRequestBlocker Extension for Magento 2

Keep your Magento 2 store protected from suspicious and harmful requests with MagedIn_TrojanRequestBlocker. This robust extension acts as a shield, detecting and blocking malicious requests before they can disrupt your e-commerce operations. Whether it’s bots, fraudulent actions, or unusual traffic spikes, MagedIn_TrojanRequestBlocker is designed to guard your store from potentially harmful activity, ensuring a secure and smooth shopping experience for legitimate users.

## Compatibility

- Magento 2.3
- Magento 2.4

## Installation

```bash
> composer require magedin/module-trojan-request-blocker
> php bin/magento module:enable MagedIn_TrojanRequestBlocker
> php bin/magento setup:upgrade
> php bin/magento setup:di:compile
```

## Further Reading

- [Adobe Commerce merchants to be hit with TrojanOrders this season](https://sansec.io/research/trojanorder-magento)
- [Magento stores targeted in massive surge of TrojanOrders attacks](https://www.bleepingcomputer.com/news/security/magento-stores-targeted-in-massive-surge-of-trojanorders-attacks/)
- [Surge in TrojanOrders Attacks on Magento 2 E-commerce Sites](https://cyberfraudcentre.com/surge-in-trojanorders-attacks-on-magento-2-e-commerce-sites)
- [Magento 2: Fake customer order came through with weird code instead of customer name](https://magento.stackexchange.com/questions/358839/magento-2-fake-customer-order-came-through-with-weird-code-instead-of-customer)
- [Despite "Allow Guest Checkout" set to "No" it's possible to place a guest order with the guest-carts REST API #36691](https://github.com/magento/magento2/issues/36691)

<div style="text-align: center;">
    <a href="https://github.com/magedin/magento2-module-frenet/">
        <img src="https://raw.githubusercontent.com/magedin/assets/c0cd4f15cee6580c6c96848400cf089e91417529/images/logo/magedin_horizontal.svg?raw=true" width="200" alt="MagedIn Technology" title="MagedIn Technology"/>
    </a>
</div>
