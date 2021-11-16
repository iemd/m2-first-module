# Social Media in Magento 2
- You will learn more about Magento 2 module development.
- It is a **big professional differential** that you can create Magento 2 in **increasingly customized solutions**.
- The importance of knowing the **different layers** and interactions among the **distinct components** of Magento 2 will **increasingly contribute** to your **improvement** and especially to the **quality** you will deliver on your **projects**.
## Magento Components
- It is important to understand the **Magento mechanism** or **Magento components**.
- The Magento application is made up of **Modules**, **Themes**, and **Language Packages**:
### Modules
- **Intract** with **other parts of the application** to accomplish a **particular business function** or **provide a feature**.
- Can contain a **user interfae** for **displaying information** or **interacting with the user**.
- Can also contain **application interfaces** that **another Magento module** or **code chunk** might call.
### Themes
- Provide a **personalized touch** for each Magento installation by **changing the look and feel** of the **storefront** or **Admin**.
- **Two themes** are already available within the **default Magento 2.x code structure**: **Blank theme** and **Luma theme**.
- Refer to these **default themes** when creating **custom themes**.
### Language packages
- Assist in **internationalization(i18n)** and **localization** by **providing translations for strings** that display on the **storefront** and **Admin**.
## Development workflow
- The **development of Magento 2 components** follows the **minimum criteria necessary** so that it can achieve the goal of delivering a **theme** or **functional module** to your user and/or client.
- These criteria are listed as follows:
    #### Dependencies declaration via `composer.json`
    #### Component registration using `registration.php`
    #### Component definition via XML components
    #### Publication and distribution of developed components. 
## Integration with Twitter REST API
- To go a little deeper on the concepts seen so far, we will develop a new module called **Sweet Tweet** integrating with social media.
- This module will make an integration with the **Application Programming Interface (API)** of Twitter and it will be used to **display tweets** with hastags **#magento2**, **#magentodev** and **#magentolive** in the **visualisation layer** of your Magento 2 instance.
- With this practice it will be possible to memorize even more the **concept of componentization** and **managing dependencies** via `composer.json` file.