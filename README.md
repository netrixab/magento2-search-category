# magento2-search-category
###Status
Tested by me on magento 2.0.something

Will probably never be updated/bugg fixed/altered for future magento releases

###Purpose
adds posibillity to search categories the same way as products

###Example
Find all categoriese with url_key starting with an "a"

/V1/categories/search?searchCriteria[filterGroups][0][filters][0][field]=url_key&searchCriteria[filterGroups][0][filters][0][value]=a%25&searchCriteria[filterGroups][0][filters][0][conditionType]=like
