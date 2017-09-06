Extension Manual
=================

This extensions uses a hook of the seo_basics XML sitemap to include generic urls from any plugin which has a single view. It works well with realurl.

Requirements
-----------------
TYPO3 >= 6.0.0 and <= 6.1.99 

Installation
-----------------

Just install the extension from ter by searching for "seo_basics_plugin_sitemap" in the extension manager.

Configuration
-----------------

Simply add a plugin definition to the sitemap in your TypoScript Template.
This is an example for all records of the extension tx_news:

```

plugin.tx_seobasicspluginsitemap {
    extensions {
	
    # The extension key
        news {
            # You can define multiple records (You can use any key)
            news {
                # Insert the uid of the page which displays the single view of your plugin.
                detailPid = 54

                # The uid of your storage folder (optional)
                where = pid=100

                # The look up table
                table = tx_news_domain_model_news

                # An array of params for link building
                additionalParams {
                    1 = tx_news_pi1[news]=$uid
                    2 = tx_news_pi1[controller]=news
                    3 = tx_news_pi1[action]=detail
                }

                # Mapping of fields, which adds the possibility to use alternate fields for item generation.
                fields {
                    uid = uid
                    tstamp = crdate
                }
            }
            category {
                detailPid = 15
                table = sys_category
                additionalParams {
                    1 = tx_news_pi1[overwriteDemand][categories]=$uid
                }
                fields {
                    uid = uid
                    tstamp = tstamp
                }
            }
        }
    }
}

```
