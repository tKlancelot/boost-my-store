<?php

class IconsENFT
{

    public function renderSvg($label,$color){
        switch($label){
            case 'chrono':
                return '<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M64.1994 34.0321C63.9109 33.7364 63.5182 33.5702 63.1079 33.5702C62.6981 33.5702 62.3054 33.7364 62.0169 34.0321L53.4248 42.7786C51.2707 41.3412 48.5754 41.024 46.1552 41.9232C43.7356 42.8217 41.8768 44.8313 41.1434 47.3409C40.4094 49.8506 40.8876 52.5647 42.4325 54.6599C43.9769 56.7557 46.4061 57.985 48.9827 57.975C51.1441 57.9793 53.2187 57.1085 54.7472 55.5552C56.2758 54.002 57.1328 51.8939 57.1286 49.6972C57.1026 48.0121 56.5662 46.3765 55.5916 45.0116L64.1684 36.3119V36.3125C64.483 36.0218 64.6648 35.611 64.6703 35.1793C64.6763 34.747 64.506 34.3319 64.1993 34.032L64.1994 34.0321ZM52.5636 53.3519C51.3635 54.5645 49.6477 55.0887 47.9882 54.7499C46.3294 54.4118 44.9457 53.2546 44.2996 51.6651C43.6535 50.0756 43.8298 48.2637 44.7699 46.8336C45.7099 45.4035 47.29 44.5443 48.9828 44.5432C50.3302 44.542 51.6224 45.0852 52.5751 46.0539C53.5273 47.0221 54.0619 48.3358 54.0594 49.7054C54.0576 51.0744 53.5194 52.3863 52.5636 53.3519V53.3519Z" fill="'.$color.'"/>
                    <path d="M6.45663 48.2594C6.45663 48.6739 6.61906 49.0711 6.90695 49.3643C7.19546 49.6568 7.58639 49.8213 7.99368 49.8213H34.5852C35.4343 49.8213 36.1222 49.1222 36.1222 48.2594C36.1222 47.3972 35.4343 46.6976 34.5852 46.6976H7.99368C7.14514 46.6976 6.45663 47.3972 6.45663 48.2594V48.2594Z" fill="'.$color.'"/>
                    <path d="M1.53787 36.7028H28.1294C28.9785 36.7028 29.6664 36.0038 29.6664 35.141C29.6664 34.2782 28.9785 33.5792 28.1294 33.5792H1.53787C0.689328 33.5792 0.000816345 34.2782 0.000816345 35.141C0.000816345 36.0038 0.689343 36.7028 1.53787 36.7028V36.7028Z" fill="'.$color.'"/>
                    <path d="M29.6656 61.38C29.6656 60.9656 29.5038 60.5683 29.2153 60.2758C28.9274 59.9826 28.5365 59.8182 28.1286 59.8182H1.53706C0.688512 59.8182 0 60.5172 0 61.38C0 62.2423 0.688527 62.9419 1.53706 62.9419H28.1286C28.5365 62.9419 28.9274 62.7774 29.2153 62.4843C29.5038 62.1911 29.6656 61.7939 29.6656 61.38Z" fill="'.$color.'"/>
                    <path d="M77.264 21.5532L78.878 19.9913C79.6471 20.4348 80.5145 20.6713 81.3988 20.6787C82.7849 20.6787 84.1141 20.1188 85.0941 19.123C86.0741 18.1271 86.6245 16.7765 86.6245 15.3681C86.6245 13.9596 86.0741 12.609 85.0941 11.6132C84.114 10.6175 82.7848 10.0582 81.3988 10.0582C80.0126 10.0582 78.6834 10.6174 77.7034 11.6132C76.7234 12.6091 76.1724 13.9597 76.1724 15.3681C76.1749 16.1891 76.3694 16.9977 76.7416 17.7269L75.0202 19.476H75.0196C68.3768 13.5686 59.9398 10.1561 51.1186 9.80818V3.12365H56.6522H56.6516C57.5008 3.12365 58.1887 2.42464 58.1887 1.56183C58.1887 0.699008 57.5008 0 56.6516 0H42.6646C41.8155 0 41.1276 0.699008 41.1276 1.56183C41.1276 2.42464 41.8155 3.12365 42.6646 3.12365H48.0444V9.80818C38.7862 10.1746 29.9635 13.8976 23.1736 20.3037C22.7136 20.741 22.5633 21.4196 22.7936 22.0151C23.0239 22.6107 23.5888 23.0036 24.2191 23.0054H35.2247H35.2241C35.4768 23.0042 35.7247 22.9401 35.9466 22.8182C40.1378 20.5302 44.8229 19.3386 49.5807 19.3509C55.4193 19.362 61.1215 21.1511 65.9502 24.4878C70.7784 27.8246 74.5114 32.5551 76.6672 38.0689C78.8232 43.5828 79.3031 49.6269 78.0449 55.4212C76.7866 61.2146 73.8476 66.492 69.608 70.5721C65.3684 74.6516 60.0226 77.3467 54.261 78.3086C48.4994 79.2699 42.5857 78.4545 37.2848 75.9676C37.0818 75.874 36.8618 75.826 36.6387 75.8272H25.2185C24.5797 75.8278 24.0082 76.2306 23.7827 76.8378C23.5572 77.4451 23.7251 78.1311 24.2039 78.5604C31.7407 85.1157 41.4703 88.4759 51.3773 87.9455C61.284 87.4147 70.6111 83.0341 77.4288 75.7102C84.2457 68.3858 88.0307 58.6796 87.9998 48.5988C87.9689 38.5182 84.1256 28.8343 77.2641 21.5535L77.264 21.5532ZM81.3988 13.1189C82.5873 13.1189 83.5504 14.0981 83.5504 15.3058C83.5504 16.5136 82.5873 17.4921 81.3988 17.4921C80.9187 17.4927 80.4526 17.3277 80.0769 17.0234C80.0247 16.9058 79.9575 16.7956 79.8768 16.6958C79.7932 16.633 79.7059 16.5757 79.6156 16.524C79.3744 16.1649 79.2459 15.74 79.2465 15.3058C79.2465 14.7257 79.4732 14.1695 79.8768 13.7594C80.2805 13.3492 80.8278 13.1189 81.3988 13.1189V13.1189Z" fill="'.$color.'"/>
                </svg>';
                break;
            case 'credit-card':
                return '    <svg width="89" height="89" viewBox="0 0 89 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 18.0069H4.58995V78.001H38.3357L38.0017 48.0526L37.9371 42.2631" stroke="'.$color.'" stroke-width="1.46" stroke-miterlimit="10"/>
                <path d="M21.9509 80.8199L21.9515 80.8199C23.2087 80.8189 24.2156 81.8246 24.2156 83.0555C24.2156 84.2805 23.2076 85.2925 21.9509 85.2925C20.6993 85.2925 19.6892 84.2806 19.6892 83.0555C19.6892 81.8256 20.6979 80.8199 21.9509 80.8199Z" fill="'.$color.'" stroke="'.$color.'" stroke-width="1.46"/>
                <path d="M21 14.5004C21 14.7764 20.9003 15 20.7777 15H17.2223C17.0997 15 17 14.7771 17 14.5004C17 14.2244 17.099 14 17.2223 14H20.7777C20.9003 14 21 14.2244 21 14.5004Z" fill="'.$color.'"/>
                <path d="M19.54 14.5004C19.54 14.4825 19.5403 14.3963 19.6011 14.2598C19.6306 14.1934 19.7036 14.0495 19.8583 13.9025C20.0204 13.7484 20.3336 13.54 20.7777 13.54V16.46C21.283 16.46 21.6547 16.2236 21.87 16.019C22.0779 15.8214 22.1988 15.6044 22.2686 15.4476C22.4098 15.1303 22.46 14.7942 22.46 14.5004H19.54ZM20.7777 13.54H17.2223V16.46H20.7777V13.54ZM17.2223 13.54C17.6649 13.54 17.9777 13.7471 18.1405 13.9015C18.2956 14.0486 18.3689 14.1928 18.3987 14.2596C18.4598 14.3967 18.46 14.4833 18.46 14.5004H15.54C15.54 14.7941 15.59 15.1306 15.7316 15.4483C15.8017 15.6055 15.9229 15.8227 16.1312 16.0202C16.3472 16.225 16.7185 16.46 17.2223 16.46V13.54ZM18.46 14.5004C18.46 14.5169 18.46 14.6024 18.3996 14.7385C18.3702 14.8048 18.2973 14.9492 18.1423 15.0968C17.9793 15.2519 17.6659 15.46 17.2223 15.46V12.54C16.7172 12.54 16.3451 12.7761 16.1289 12.9819C15.9206 13.1802 15.7998 13.398 15.7303 13.5548C15.5895 13.8722 15.54 14.2079 15.54 14.5004H18.46ZM17.2223 15.46H20.7777V12.54H17.2223V15.46ZM20.7777 15.46C20.332 15.46 20.0184 15.2502 19.8569 15.0962C19.7026 14.9492 19.6299 14.8055 19.6006 14.7395C19.5403 14.6038 19.54 14.5182 19.54 14.5004H22.46C22.46 14.2065 22.4098 13.8707 22.269 13.5538C22.1995 13.3973 22.0789 13.1802 21.8714 12.9825C21.6567 12.7778 21.2846 12.54 20.7777 12.54V15.46Z" fill="'.$color.'"/>
                <path d="M29.5 11.5789H6.5405C3.48047 11.5789 1 14.0204 1 17.0305V82.5484C1 85.5586 3.48127 87.9992 6.5405 87.9992L36.3844 88C39.4452 88 41.9257 85.5594 41.9257 82.5492V43.0925V42.5086" stroke="'.$color.'" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M88.5358 47.2939L75.4205 2.65402C74.9202 1.06735 73.4347 0 71.724 0C70.5598 0 69.4709 0.510502 68.7386 1.40222C68.338 1.88932 68.0252 2.42099 67.7568 2.96492L21.2176 11.8096C20.5537 11.9405 19.9793 12.314 19.5992 12.8607C19.2123 13.4163 19.0744 14.084 19.2089 14.7321L20.1805 19.6383L21.4056 25.7677L24.811 42.9071C24.9363 43.5648 25.3164 44.1344 25.8885 44.5111C26.3159 44.7942 26.8077 44.9408 27.3051 44.9408C27.4709 44.9408 27.6385 44.9246 27.8043 44.8923L49.2016 40.8199L57.8989 48.6749L57.9103 48.7334C58.385 51.019 58.4351 53.2449 58.0573 55.3476C55.7774 68.0301 61.1846 78.7562 61.417 79.207C61.6341 79.6289 62.0757 79.8947 62.5584 79.8947H80.4284C81.0079 79.8947 81.5156 79.5113 81.6626 78.9635L88.6584 52.8826C89.1536 51.0273 89.1092 49.0839 88.5331 47.2911L88.5358 47.2939ZM66.9314 5.66445C66.8379 6.46197 66.8561 7.27238 67.0054 8.06879L67.2362 9.41695L22.4432 17.9362L21.7143 14.2585L66.9314 5.66445ZM27.3199 42.4444L24.1556 26.5163L68.7182 18.0344L71.4677 34.0496L67.8225 34.7412L64.7932 28.2557C63.9812 26.5219 62.5698 25.0985 60.822 24.2508C60.1519 23.9226 59.4271 23.7565 58.6674 23.7565C57.0542 23.7565 55.5556 24.5368 54.657 25.8454C53.9447 26.8842 53.6854 28.1761 53.9435 29.3821L55.5174 37.0787L27.3193 42.4457L27.3199 42.4444ZM72.5841 40.5528C72.5864 40.5679 72.6018 40.705 72.6058 40.7211C72.6058 40.9781 72.4741 41.1642 72.3864 41.2556C72.1505 41.4841 71.8809 41.4964 71.7356 41.4813C71.5966 41.4674 71.335 41.4039 71.1538 41.1391C70.4045 40.0429 69.7652 38.9193 69.2494 37.7947L68.9138 37.0758L71.8905 36.5118L72.5852 40.554L72.5841 40.5528ZM52.3101 40.2296L56.0282 39.5218L57.0482 44.5081L52.3101 40.2296ZM86.1901 52.2516L79.4444 77.3993H63.379C62.2695 74.8914 58.7581 65.8767 60.5748 55.7814C61.0073 53.3693 60.9537 50.8328 60.4164 48.2474L58.2835 37.8183C58.2721 37.762 58.2567 37.7057 58.2373 37.6533L56.4441 28.8821C56.3238 28.3192 56.4441 27.7184 56.7774 27.2369C57.3991 26.3307 58.6944 26.0058 59.6824 26.4857C60.9115 27.0826 61.9019 28.0796 62.4711 29.2946L66.9222 38.8248C67.4926 40.0694 68.2009 41.3144 69.0294 42.5288C69.5884 43.3442 70.4796 43.8686 71.4762 43.9667C72.4796 44.0625 73.4598 43.727 74.1988 43.0131C74.8165 42.3889 75.1573 41.5764 75.1573 40.7225C75.1573 40.5112 75.1345 40.3006 75.1008 40.1417L74.188 34.8271C74.1868 34.8199 74.1891 34.8121 74.188 34.8032C74.188 34.797 74.1828 34.7931 74.1817 34.787L69.5187 7.63755C69.321 6.58143 69.4253 5.50529 69.8304 4.50158C70.0384 3.95205 70.3399 3.43541 70.7262 2.96612C71.063 2.55648 71.4961 2.49573 71.7217 2.49573C72.2078 2.49573 72.785 2.77161 72.9714 3.36459L86.0878 48.0116C86.5271 49.3859 86.5613 50.8517 86.1875 52.2523L86.1901 52.2516Z" fill="'.$color.'"/>
                </svg>';
                break;
            case 'map':
                return '<svg width="88" height="89" viewBox="0 0 88 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M87.1277 37.9682L64.0208 30.2078C65.024 25.522 64.9637 22.5158 64.8753 21.3373C64.8849 21.1701 64.8849 21.0036 64.8849 20.8562C64.8849 9.35294 55.5327 0 44.0287 0C32.5644 0 23.2321 9.30294 23.183 20.758C23.0652 21.6324 22.5348 26.937 25.7177 36.4764L1.68983 28.4096C1.29718 28.2822 0.86479 28.3411 0.530378 28.5864C0.196668 28.8222 0 29.2155 0 29.628V77.1646C0 77.7155 0.353585 78.2068 0.874386 78.3829L29.3528 87.932C29.6276 88.0313 29.9126 88.0204 30.1778 87.932L58.244 78.5112L86.3102 87.932C86.4479 87.9813 86.5843 88.0005 86.7227 88.0005C86.9879 88.0005 87.2421 87.9217 87.4696 87.7552C87.8033 87.5195 88 87.1364 88 86.7239V39.1768C88 38.6252 87.6464 38.1339 87.1256 37.9674L87.1277 37.9682ZM62.628 32.4471L67.1472 52.0946L59.014 51.5738V42.0248C60.586 38.321 61.6558 35.099 62.3834 32.358L62.628 32.4471ZM44.0312 9.38051C50.3574 9.38051 55.505 14.5282 55.505 20.8543C55.505 27.1805 50.3574 32.3281 44.0312 32.3281C37.705 32.3281 32.5574 27.1805 32.5574 20.8543C32.5574 14.5282 37.705 9.38051 44.0312 9.38051ZM30.5332 45.4145C32.7828 50.1693 35.8671 55.6898 40.0822 61.9284L30.5332 67.4694V45.4145ZM2.56523 31.4059L9.39311 33.6947L4.96223 46.367L2.56523 44.2949V31.4059ZM2.56523 46.3184L4.80541 48.2535L14.5209 56.6232L2.56541 73.9629L2.56523 46.3184ZM28.9912 85.1118L2.78978 76.3193L15.6986 57.6244L28.9905 69.0687L28.9912 85.1118ZM28.9912 67.0466L16.0433 55.9064L6.2195 47.4382L10.8463 34.1861L19.3242 37.0251L25.9849 39.2653L27.3993 39.7368L28.1558 39.9923C28.421 40.6509 28.6958 41.3183 28.9911 42.0159L28.9912 67.0466ZM57.4696 76.0748L30.5332 85.1127V69.2375L40.9565 63.2058C41.7226 64.3269 42.5285 65.4651 43.383 66.6342C43.5303 66.8308 43.7565 66.9487 44.0018 66.9487C44.2471 66.9487 44.4828 66.8308 44.6206 66.6342C46.9586 63.4211 49.0021 60.3764 50.8097 57.488L57.4704 53.6363L57.4696 76.0748ZM57.4696 51.8592L52.4891 54.7476C54.4742 51.3973 56.1141 48.2932 57.4696 45.4343V51.8592ZM85.4481 84.946L59.0116 76.0755V53.1177L85.4481 54.7972V84.946ZM85.4481 53.2556L68.7478 52.1948L64.3368 33.0174L85.4473 40.1002L85.4481 53.2556Z" fill="'.$color.'"/>
                </svg>';
                break;
        }
    }

}