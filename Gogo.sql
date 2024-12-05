create database Gogo;
use Gogo;

create table cultural_locations (
	id int AUTO_INCREMENT PRIMARY KEY,
	name nvarchar(255),
    region nvarchar(255),
    image_url nvarchar(255),
    description text
); 
create table cuisines (
	id int AUTO_INCREMENT PRIMARY KEY,
    name nvarchar(255),
    description text,
    image_url nvarchar(255),
    location_id int,
    CONSTRAINT fk_cuisines_location FOREIGN KEY (location_id) REFERENCES cultural_locations(id)
);
create table events (
	id int AUTO_INCREMENT PRIMARY KEY,
    name nvarchar(255),
    event_date Date,
    description text,
    cultural_location_id int,
    image_url nvarchar(255),
    CONSTRAINT fk_events_location FOREIGN KEY (cultural_location_id)  REFERENCES cultural_locations(id)
    
);

 create table dishes (
     id int AUTO_INCREMENT PRIMARY KEY,
     name nvarchar(255),
     description text,
     image_url nvarchar(255),
     cuisines_id int,
     CONSTRAINT fk_dishes_cuisines FOREIGN KEY (cuisines_id) REFERENCES cuisines(id)   
 );
 
 create table tours (
	id int AUTO_INCREMENT PRIMARY KEY,
     name nvarchar(255),
     description text,
     started_date date,
     completed_date date,
     price int,
     image_url nvarchar(255),
     cultural_location_id int,
     CONSTRAINT fk_tour_location FOREIGN KEY (cultural_location_id) REFERENCES cultural_locations(id) 
 );

 create table users (
     id int AUTO_INCREMENT PRIMARY KEY,
     email nvarchar(255),
     username nvarchar(50),
     password nvarchar(255),
     fullname nvarchar(50),
     phone nvarchar(15),
     created_date date
 );

 create table reviews (
     id int AUTO_INCREMENT PRIMARY KEY,
     detail text,
     rating int(5),
     review_date date,
     user_id int,
     CONSTRAINT fk_reviews_users FOREIGN KEY (user_id) REFERENCES users(id)
 );


INSERT INTO cultural_locations (name, region, image_url, description) VALUES
("Ha Noi", "Northern Vietnam", "https://owa.bestprice.vn/images/destinations/uploads/trung-tam-thanh-pho-ha-noi-603da1f235b38.jpg", "Vietnam\'s capital city blends ancient temples, colonial architecture, and a bustling Old Quarter. Iconic landmarks include Hoan Kiem Lake, the Temple of Literature, and Ho Chi Minh Mausoleum."),
("Ha Long", "Northern Vietnam", "https://asiaholiday.com.vn/pic/Tour/Tour%20Du%20lich%20Ha%20Long%20(5)_2261_HasThumb.jpg", "A UNESCO World Heritage Site, Ha Long Bay is famed for its emerald waters dotted with limestone karsts and caves. Cruises through the bay are a quintessential experience."),
("Sa Pa", "Northern Vietnam", "https://media.baobinhphuoc.com.vn/upload/news/5_2023/c29efc89b1a8554f27a79a5bf6bdf6a0.jpg", "Nestled in the northern mountains, Sa Pa is a trekking haven with terraced rice fields, ethnic minority villages, and stunning views of Mount Fansipan."),
("Mai Chau", "Northern Vietnam", "https://mia.vn/media/uploads/blog-du-lich/mai-chau-hoa-binh-co-gi-1-1681688296.jpg", "A peaceful valley surrounded by mountains, Mai Chau offers homestays with local Thai ethnic groups, bamboo forests, and scenic cycling paths."),
("Ninh Binh", "Northern Vietnam", "https://cafefcdn.com/203337114487263232/2024/9/4/ninh-binh-2-17247693034201095070408-61-1725440596887-17254405970681798243927.jpg", "Dubbed the “Halong Bay on land,” Ninh Binh features dramatic limestone cliffs, Tam Coc boat rides, and ancient temples like Bai Dinh Pagoda."),
("Ha Giang", "Northern Vietnam", "https://vnmedia.vn/file/8a10a0d36ccebc89016ce0c6fa3e1b83/112023/ha_20231114082805.jpg", "A remote and stunning mountainous region, Ha Giang is perfect for motorbike trips along the Dong Van Karst Plateau, ethnic markets, and breathtaking landscapes."),
("Da Nang", "Central Vietnam", "https://static-2.happynest.vn/storage/uploads/2024/06/15-dia-diem-du-lich-da-nang-dep-me-man-nam-2024_0.jpg", "A modern coastal city with golden beaches, Da Nang offers attractions like the iconic Dragon Bridge and Marble Mountains. It\'s also the gateway to Bana Hills and the Golden Bridge."),
("Hoi An", "Central Vietnam", "https://images2.thanhnien.vn/528068263637045248/2023/4/4/hoi-an-1680591517857660432696.jpg", "This UNESCO World Heritage Site enchants visitors with its well-preserved ancient town, lantern-lit streets, and a rich culinary scene. Tailor shops and traditional wooden architecture are highlights."),
("Nha Trang", "Central Vietnam", "https://dulichseatravel.com/wp-content/uploads/2023/10/duong-tran-phu-nha-trang-2_1651556571.jpg", "A beach lover\'s paradise, Nha Trang features turquoise waters, coral reefs, and luxury resorts. The city also offers vibrant nightlife and nearby attractions like Po Nagar Cham Towers."),
("Hue", "Central Vietnam", "https://hotelnikkohanoi.com.vn/wp-content/uploads/2023/04/ban-do-du-lich-hue-1.jpg", "The former imperial capital, Hue is known for its historic citadel, royal tombs, and pagodas. Perfume River cruises offer a serene way to explore its cultural heritage."),
("Phong Nha", "Central Vietnam", "https://cdnmedia.baotintuc.vn/Upload/c2tvplmdloSDblsn03qN2Q/files/2023/03/07/du-lich-phong-nha-732023.jpg", "A haven for adventurers, Phong Nha is home to the world\'s largest cave, Son Doong, as well as stunning karst landscapes and underground rivers in Phong Nha-Ke Bang National Park."),
("Da Lat", "Central Vietnam", "https://agotourist.com/wp-content/uploads/2021/10/thanh-pho-da-lat-2.jpg", "Nicknamed the “City of Eternal Spring,” Da Lat is a romantic mountain retreat with cool weather, flower gardens, and French colonial architecture. It\'s also popular for adventure sports."),
("Phu Yen", "Central Vietnam", "https://ohdidi.vn/uploads/members/uyen.vo/du%20l%E1%BB%8Bch%20phu%20yen%20mua%20nao%20d%E1%BA%B9p/du-lich-phu-yen-mua-nao-dep%202.png", "An emerging destination, Phu Yen captivates with its unspoiled beaches, rugged cliffs, and the iconic Da Dia Reef. It\'s perfect for nature lovers seeking tranquility."),
("Ho Chi Minh City", "Southern Vietnam", "https://www.visithcmc.vn/uploads/0000/6/2021/08/22/hcmc-1120046774-1.jpg", "Vietnam\'s bustling economic hub offers a mix of historical landmarks like the War Remnants Museum and Cu Chi Tunnels alongside modern skyscrapers. Known for vibrant nightlife, craft beer scenes, and bustling street markets, it\'s a must-visit for urban explorers."),
("Binh Thuan", "Southern Vietnam", "https://mia.vn/media/uploads/blog-du-lich/du-lich-binh-thuan-01-1695999943.jpg", "Famous for its serene beaches in Mui Ne and striking red sand dunes, Binh Thuan offers a quiet escape. The region is also known for dragon fruit plantations and Cham cultural heritage."),
("Con Dao", "Southern Vietnam", "https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2022/9/24/1096833/Hon-Bay-Canh---Yeudu.jpg", "An archipelago of pristine islands with turquoise waters and coral reefs, Con Dao is perfect for snorkeling, diving, and exploring untouched beaches. Its historical sites, like the Con Dao Prison, provide a glimpse into Vietnam\'s colonial past."),
("Phu Quoc", "Southern Vietnam", "https://ik.imagekit.io/tvlk/blog/2024/08/thoi-tiet-phu-quoc-7.jpg?tr=dpr-2,w-675", "Known as Pearl Island, Phu Quoc boasts white-sand beaches, lush national parks, and vibrant night markets. It\'s ideal for luxury resorts and adventurous activities like snorkeling and trekking."),
("Can Tho", "Southern Vietnam", "https://vnexplores.vn/uploads/0000/6/2024/09/01/cantho.jpg", "The heart of the Mekong Delta, Can Tho is famous for its floating markets like Cai Rang, where you can shop on boats and experience river life. The region is also rich in lush orchards and rural charm."),
("Chau Doc", "Southern Vietnam", "https://cdn.tgdd.vn/Files/2022/03/29/1422960/kinh-nghiem-du-lich-chau-doc-tat-tan-tat-tu-a-z-202203292333393564.jpg", "Located near the Cambodian border, Chau Doc is a cultural melting pot. It\'s known for Sam Mountain, Tra Su Cajuput Forest, and vibrant floating villages.");



INSERT INTO cuisines (name, description, image_url, location_id) VALUES
("Pho", "A famous Vietnamese noodle soup made with a flavorful broth, rice noodles, herbs, and typically beef (pho bo) or chicken (pho ga). It\'s often served with fresh herbs, bean sprouts, lime, and chili on the side.", "https://dienmaynewsun.com/wp-content/uploads/2019/08/cong-thuc-nuoc-dung-pho.webp", 1),
("Banh Mi", "A Vietnamese sandwich consisting of a baguette filled with a variety of ingredients like meats (usually pork, chicken, or beef), pickled vegetables, cilantro, cucumber, and spicy condiments. It combines French influences with Vietnamese flavors.", "https://i.ytimg.com/vi/h5eq9yfMAKs/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDmoMZWzKJ_6kKQtcO7xgKZXrBGNQ", 2),
("Com Tam", "Known as broken 'rice'. This dish is served with grilled pork (often ribs or shredded pork), but can also include fried egg, pickled vegetables, and a side of fish sauce, making it a flavorful and hearty meal.", "https://cafebiz.cafebizcdn.vn/162123310254002176/2022/12/7/com-tam-suon-bi-cha-trung-anh-hoa-quynh-nguyen-1670317945936565526419-1670385940206-16703859407121546487016-1670395722685-16703957227611562343004.jpg", 3),
("Bun Bo Hue", "A spicy, aromatic beef noodle soup originating from Hue, Vietnam. It features a rich broth made with lemongrass and chili, served with rice noodles, tender beef, and sometimes pork, accompanied by fresh herbs.", "https://static.vinwonders.com/production/bun-bo-hue-ngon-o-sai-gon-2.jpg", 3),
("Cao Lau", "A signature dish from Hoi An, consisting of thick noodles served with slices of pork, crispy croutons, fresh herbs, and a small amount of broth. The noodles are made with water from a specific well in Hoi An, giving them a unique texture.", "https://cdn.tgdd.vn/2021/12/CookDishThumb/cao-lau-la-gi-nguon-goc-cao-lau-cao-lau-va-mi-quang-khac-nhau-thumb-620x620.jpg", 5),
("Com Ga", "A Vietnamese chicken rice dish, typically made with steamed or boiled chicken served with fragrant rice cooked in chicken broth, accompanied by fresh vegetables, herbs, and often a side of dipping sauce.", "https://static.vinwonders.com/2023/02/com-ga-da-nang-2.jpeg", 1),
("Mi Quang", "A noodle dish from Quang Nam province, featuring wide rice noodles served with a small amount of broth, shrimp, pork, or chicken, and topped with peanuts, herbs, and crispy rice crackers. It\'s typically enjoyed with a strong, savory flavor.", "https://hoianheritage.net/uploads/trao-doi-chuyen-nganh/2022_08/mi-quang-hoi-an-ngon.jpg", 7),
("Banh Xeo", "Vietnamese savory pancakes made with rice flour, turmeric, and coconut milk. They are filled with a variety of ingredients such as shrimp, pork, bean sprouts, and onions, and are often eaten wrapped in lettuce with herbs and dipped in fish sauce.", "https://www.andy-cooks.com/cdn/shop/articles/20240406030532-andy-20cooks-20-20banh-20xeo.jpg?v=1712382159", 8),
("Bun Cha", "A grilled pork dish served with rice noodles, fresh herbs, and a sweet-sour dipping sauce. The pork is grilled and served alongside crispy fried pork meatballs. It is a popular dish in Hanoi.", "https://media-cdn-v2.laodong.vn/storage/newsportal/2023/7/1/1211359/Bun-Cha-Quat.jpeg?w=800&crop=auto&scale=both", 6),
("Xoi", "A traditional sticky rice dish often eaten for breakfast or as a snack. It can be served with a variety of toppings, such as mung beans, fried shallots, shredded coconut, or pork.", "https://beptruong.edu.vn/wp-content/uploads/2015/11/xoi-xeo-ha-noi.jpg", 10),
("Banh Beo", "Small, round rice cakes topped with shrimp, fried onions, and herbs, often served with fish sauce. It\'s a popular snack or appetizer in central Vietnam.", "https://static.vinwonders.com/2022/10/banh-beo-da-nang-1.jpg", 11),
("Bun Rieu", "A Vietnamese noodle soup made with a tomato-based broth, rice noodles, and crab or pork. It\'s typically topped with fried tofu, shrimp, and fresh herbs.", "https://i.ytimg.com/vi/C1P1Cw9J1-I/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLD7gErv1KKy_4KmD2kg-CboPePusQ", 7),
("Goi Cuon", "Vietnamese spring rolls made with rice paper and filled with shrimp, fresh herbs, rice noodles, and lettuce. They are typically served with a peanut or hoisin-based dipping sauce.", "https://upload.wikimedia.org/wikipedia/commons/0/01/Goi_Cuon_VN.jpg", 13),
("Hu Tieu Nam Vang", "A noodle soup that originated from Phnom Penh, Cambodia, but is widely popular in southern Vietnam. It consists of clear broth, rice noodles, and various meats, such as pork, shrimp, and sometimes organ meats.", "https://danangtoiyeu.com/wp-content/uploads/2024/04/hu-tieu-nam-vang-da-nang-4.png", 2),
("Cha Ca", "A Hanoi specialty made from marinated fish (usually catfish or other white fish) grilled or pan-fried and served with noodles, herbs, and peanuts, often topped with a rich turmeric-based sauce.", "https://anbieneatery.com/wp-content/uploads/2021/06/IMG_0054-e1629126304958.jpg", 15),
("Nom Hoa Chuoi", "A type of Vietnamese salad made with banana flowers, herbs, and often mixed with shredded chicken or pork. It\'s typically dressed with fish sauce and lime, giving it a tangy and refreshing flavor.", "https://i-giadinh.vnecdn.net/2021/10/13/nomhoachuoi-1634112383-3141-1634112478.png", 5),
("Banh Cuon", "Steamed rice rolls filled with a savory mixture of minced pork, mushrooms, and onions. The rolls are often served with fried shallots, fresh herbs, and a dipping sauce made with fish sauce.", "https://dienmaynewsun.com/wp-content/uploads/2023/05/banh-cuon-ngon.jpg", 10),
("Bun Bo Cuon La Lot", "A dish made with grilled beef wrapped in betel leaves, then served with rice noodles, fresh herbs, and a side of fish sauce. The betel leaves give the meat a unique, aromatic flavor.", "https://beptruong.edu.vn/wp-content/uploads/2018/05/bo-nuong-la-lot.jpg", 6),
("Che", "A Vietnamese dessert made from a variety of ingredients like beans, tapioca pearls, fruits, and sweetened coconut milk. It can be served hot or cold and is often enjoyed as a refreshing treat.", "https://danviet.mediacdn.vn/296231569849192448/2021/12/2/che-hoi-an-1638414830708721416189.jpg", 8);

INSERT INTO events (name, event_date, description, cultural_location_id, image_url) VALUES
("Hue Festival", "2024-11-20", "A cultural festival showcasing traditional Vietnamese art, music, and dance, as well as reenactments of Nguyễn Dynasty rituals.", 10, "https://media.techcity.cloud/hue/2024/07/Tuan-le-Festival-Hue-2022.jpg"),
("Lim Festival", "2024-11-25", "Known for its Quan Họ folk singing, this festival celebrates love duets and traditional games in the Kinh Bắc region.", 1, "https://media-cdn-v2.laodong.vn/storage/newsportal/2024/2/19/1305522/Hoi-Lim.jpg"),
("Ha Noi International Film Festival", "2024-11-21", "A gathering of filmmakers from Vietnam and abroad, featuring screenings, workshops, and awards to promote Vietnamese cinema.", 1, "https://media.vov.vn/sites/default/files/styles/large/public/2024-07/ntt_7815_0.jpg"),
("Hung Kings\' Death Anniversary", "2024-11-22", "A tribute to the Hung Kings, the legendary founders of Vietnam, with parades, ceremonies, and traditional games.", 1, "https://images.baodantoc.vn/uploads/2021/Th%C3%A1ng%202/Ng%C3%A0y_24/Thanh/cac-nghi-le-chinh-trong-ngay-gio-to-hung-vuong.jpg"),
("Hoi An Lantern Festival", "2024-11-26", "The ancient town glows with colorful lanterns as locals and visitors release paper lanterns on the Thu Bon River for good luck.", 8, "https://data.agatetravel.com/images/photogallery/2020/hoi-an-lantern-festival-vietnam.jpg"),
("Da Nang International Fireworks Festival", "2024-06-01", "Teams from various countries compete in spectacular fireworks displays, set to music and lighting, along the Han River.", 7, "https://image.vietnam.travel/sites/default/files/styles/top_banner/public/2024-06/diff-2023-voi-nhung-man-trinh-dien-phao-hoa-ruc-ro-17117048707811543253126.jpg?itok=6xR0Rn05"),
("Tay Son Festival", "2024-02-01", "Celebrates the Tay Son uprising led by Emperor Quang Trung, featuring martial arts performances and traditional drumming.", 4, "https://image.sggp.org.vn/w1000/Uploaded/2024/aopsvhu/2022_02_05/tayson_plwy.jpg.webp"),
("Whale Festival", "2024-08-01", "Fishermen honor the whale as a sacred guardian of the sea, with ceremonies, processions, and offerings for safe voyages.", 6, "https://nguoiduatin.mediacdn.vn/thumb_w/642/media/ton-duc-vy/2020/01/15/3-2.jpg"),
("Do Son Buffalo Fighting Festival", "2024-09-01", "A traditional buffalo fighting festival in Dô Son, Hai Phong, where buffaloes compete in a fight, attracting thousands of visitors.", 2, "https://cdn.haiphong.gov.vn/gov-hpg/SiteFolders/sodulich/6293/tintuc/2024/9/image638630482819731226.jpeg"),
("Da Lat Flower Festival", "2024-01-01", "A festival showcasing the vibrant flower culture of Da Lat, with flower exhibitions, parades, and performances.", 5, "https://bazantravel.com/cdn/medias/uploads/36/36342-vuon-hoa-da-lat-bazan-travel-1.jpg"),
("First Full Moon Festival", "2024-01-15", "A festival celebrating the first full moon of the lunar year, with various cultural activities and a focus on spiritual rituals.", 3, "https://afamilycdn.com/2018/3/1/15-15199205380961830948326.jpg"),
("Fish Worship Festival", "2024-03-01", "A festival held by fishermen in central Vietnam, praying for a bountiful catch, good health, and peaceful seas.", 6, "https://baokhanhhoa.vn/file/e7837c02857c8ca30185a8c39b582c03/dataimages/201905/original/images5362312_caungu_3.jpg"),
("Mid-Autumn Festival", "2024-09-15", "A children\'s festival celebrated on the 15th day of the 8th lunar month, with lanterns, mooncakes, and traditional games.", 1, "https://images.vietnamtourism.gov.vn/vn/images/Quatrungthu.jpg");


INSERT INTO dishes (name, description, image_url, cuisines_id) VALUES
("Pho Bo", "A Vietnamese beef noodle soup served with rice noodles in a rich, flavorful broth, typically garnished with herbs, bean sprouts, and lime.", "https://duonggiahotel.vn/wp-content/uploads/2023/09/quan-pho-da-nang.jpg", 1),
("Banh Mi Thit Nuong", "A Vietnamese sandwich with grilled pork, pickled vegetables, and cilantro in a French baguette.", "https://kvi.vn/Uploads/786/images/file_restaurant_photo_nfos_16608-a5edadfe-220818150324.jpg", 2),
("Com Tam Suon", "A popular Vietnamese dish with broken rice, grilled pork chops, pickled vegetables, and a side of fish sauce.", "https://bigtop.vn/wp-content/uploads/2022/11/Com-Tam-Suon-Cong-3.jpg", 3),
("Bun Bo Hue", "A spicy beef noodle soup with lemongrass, chili, and tender beef slices, originating from the city of Hue.", "https://bizweb.dktcdn.net/100/442/328/files/bun-bo-hue-dac-san-dan-da-lam-say-long-biet-bao-thuc-khach-4.jpg?v=1638937219225", 3),
("Cao Lau Hoi An", "A unique noodle dish from Hoi An, featuring thick noodles, grilled pork, crispy croutons, and fresh herbs.", "https://statics.vinpearl.com/cao-lau-hoi-an-01_1631078817.jpg", 5),
("Ga Nuong Mat Ong", "Grilled chicken glazed with honey, served with rice and fresh vegetables.", "https://amthucvanho.com.vn/wp-content/uploads/2019/12/lam-ga-nuong-mat-ong-thom-nuc-mui-cho-dem-giang-sinh-am-ap.jpg", 1),
("Mi Quang Tom", "A noodle dish from Quang Nam with a small amount of broth, shrimp, herbs, and crispy rice crackers.", "https://helenrecipes.com/wp-content/uploads/2021/05/Screenshot-2021-05-31-142423-1024x576.png", 7),
("Banh Xeo Sai Gon", "Vietnamese savory pancakes made with rice flour and turmeric, filled with shrimp, pork, and bean sprouts, served with lettuce and herbs.", "https://static.vinwonders.com/production/banh-xeo-sai-gon-banner.jpg", 8),
("Bun Cha Ha Noi", "Grilled pork served with rice noodles, herbs, and a dipping sauce, popular in Hanoi.", "https://thenguyen.vn/files/products/product_1831/bun-cha-ha-noi-chi-lay-ba-roi.jpg", 6),
("Che Ba Mau", "A traditional Vietnamese dessert with layers of green mung bean, red beans, and coconut milk, served cold.", "https://takestwoeggs.com/wp-content/uploads/2021/09/Che%CC%80-Ba-Ma%CC%80u-Vietnamese-three-colored-dessert-Takestwoeggs-Final-SQ.jpg", 8),
("Nom Ga", "A refreshing Vietnamese salad made with shredded chicken, banana flowers, herbs, and lime.", "https://giadinh.mediacdn.vn/296230595582509056/2022/11/7/nom-ga-xe-phay-1667791826652-1667791826978214972110.jpg", 5),
("Cha Ca La Vong", "A famous Hanoi dish with grilled fish served with vermicelli, fresh herbs, and a turmeric-based sauce.", "https://icdn.24h.com.vn/upload/4-2022/images/2022-12-01/1669861237-che1baa3cc3a1lc483ng-1669563905610-166956390586391225552-width680height454.jpg", 15),
("Banh Cuon Ha Noi", "Steamed rice rolls filled with minced pork, mushrooms, and herbs, topped with fried shallots and served with fish sauce.", "https://cdn.attractionsvietnam.com/uploads/2023/12/quan-banh-cuon-hanoi.jpg", 10),
("Bun Rieu Cua", "A Vietnamese noodle soup made with a crab-based broth, rice noodles, and topped with fried tofu and shrimp.", "https://i.ytimg.com/vi/C1P1Cw9J1-I/maxresdefault.jpg", 7);


INSERT INTO tours (name, description, started_date, completed_date, price, image_url, cultural_location_id) VALUES 
("Hanoi City Exploration", "A 3-day tour exploring Hanoi\'s rich history, culture, and landmarks such as Hoan Kiem Lake, the Old Quarter, and the Temple of Literature.", "2024-11-20", "2024-11-23", 6800000, "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/33/f7/12/caption.jpg?w=1200&h=700&s=1", 1),
("Hanoi Night Market Adventure", "Experience the vibrant night markets of Hanoi, where you can shop for local crafts, try street food, and explore the bustling Old Quarter.", "2024-11-20", "2024-11-25", 2000000, "https://cdn.vietnamisawesome.com/wp-content/uploads/2023/04/hanoi-night-market-2-1024x768.jpeg", 1),
("Ho Chi Minh Mausoleum Tour", "A half-day tour to visit the Ho Chi Minh Mausoleum and learn about Vietnam\'s history and revolutionary leader.", "2024-12-01", "2024-12-07", 1500000, "https://c.foc.info/images/2019/05/960-ho-chi-minh-mausoleum-1557299245.jpg", 1),
("Ha Long Bay Cruise", "A day tour with a boat cruise through Ha Long Bay, visiting limestone islands and caves, perfect for nature lovers.", "2024-11-22", "2024-11-26", 12000000, "https://www.halonghub.com/wp-content/uploads/2022/06/HalongHub-HeroHome.jpg", 2),
("Ha Long Bay Kayaking", "Experience the beauty of Ha Long Bay up close with a kayaking tour through its clear waters and limestone formations.", "2024-11-26", "2024-11-28", 8000000, "https://hanoiexploretravel.com/wp-content/uploads/2020/08/kayaking-at-luon-cave.jpg", 2),
("Ha Long Fishing Village Visit", "A unique tour to visit the floating fishing villages of Ha Long Bay, learn about the local way of life, and enjoy fresh seafood.", "2024-12-01", "2024-12-05", 10000000, "https://statics.vinpearl.com/cua-van-floating-village-9_1677604968.jpg", 2),
("Sa Pa Trekking Tour", "A 2-day trekking tour through Sa Pa\'s terraced rice fields and ethnic minority villages, with stunning views of Mount Fansipan.", "2024-11-20", "2024-11-25", 7500000, "https://trekking-camping.com/wp-content/uploads/2021/02/Sapa.jpg", 3),
("Sa Pa Homestay Experience", "Stay with a local ethnic minority family in Sa Pa, learn about their culture, and enjoy traditional meals.", "2024-11-24", "2024-11-27", 6000000, "https://sapanomad.com/wp-content/uploads/Experience-in-a-homestay-experience.jpg", 3),
("Sa Pa Cultural Exploration", "Explore the rich cultures of Sa Pa\'s hill tribes with a guided tour to their villages and markets.", "2024-12-01", "2024-12-05", 5000000, "https://vietasiatravel.com/uploads/VietNam/Sa-pa/sapa5.jpg", 3),
("Mai Chau Valley Tour", "A relaxing 1-day tour through the peaceful Mai Chau Valley, visiting Thai ethnic villages and enjoying local homestay experiences.", "2024-11-22", "2024-11-26", 4000000, "https://izitour.com/media/ckeditor/mai-chau-best-time-to-visit_2023-07-03_631.webp", 4),
("Mai Chau Cycling Tour", "A guided cycling tour through Mai Chau\'s bamboo forests and scenic countryside, perfect for nature and adventure enthusiasts.", "2024-11-25", "2024-11-27", 3000000, "https://authentiktravel.com/media/ckeditor/mai-chau-bike.jpg", 4),
("Mai Chau Traditional Cuisine Tour", "Indulge in Mai Chau\'s traditional Thai dishes, including sticky rice, grilled meats, and herbal teas, on this food-focused tour.", "2024-11-28", "2024-12-02", 3500000, "https://maichauhideaway.com/Data/Sites/1/media/blog/am-thuc-tay-bac-maichauhideaway/com-lam-maichauhideaway.com.jpg", 4),
("Tam Coc Boat Tour", "Take a scenic boat ride through the river and rice fields of Tam Coc, surrounded by dramatic limestone mountains.", "2024-11-21", "2024-11-27", 5000000, "https://hanoiexploretravel.com/wp-content/uploads/2018/08/Tam-Coc-Boat-Ride.jpg", 5),
("Ninh Binh Historical Tour", "Visit ancient temples and pagodas like Bai Dinh and Hoa Lu on this full-day tour to explore Ninh Binh\'s rich history.", "2024-11-23", "2024-11-26", 6000000, "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/9e/f5/69/caption.jpg?w=500&h=400&s=1", 5),
("Trang An Eco Tour", "A boat trip through the UNESCO-listed Trang An Scenic Landscape, featuring caves, grottoes, and lush landscapes.", "2024-11-25", "2024-11-28", 7000000, "https://daytourshanoi.com/wp-content/uploads/trang-an-boat-trip-2.jpg", 5),
("Ha Giang Motorbike Adventure", "A 5-day motorbike tour along the Dong Van Karst Plateau, exploring remote villages and breathtaking landscapes.", "2024-11-20", "2024-11-24", 15000000, "https://media.vietnammotorcycletours.com/storage/2022/12/ha-giang-loop-motorbike-8.jpg", 6),
("Ha Giang Ethnic Markets Tour", "Visit Ha Giang\'s vibrant ethnic markets and experience the unique culture and traditions of the local tribes.", "2024-11-20", "2024-11-27", 5000000, "https://saigontourist.net/uploads/destination/TrongNuoc/mienbac/sapa/sapa-market.jpg", 6),
("Ha Giang Trekking Tour", "Embark on a trekking adventure through the picturesque hills and valleys of Ha Giang, perfect for nature lovers and photographers.", "2024-12-02", "2024-12-07", 8000000, "https://www.mrlinhadventure.com/UserFiles/Image/Gallerytour/trekking%20in%20remote%20north%20Vietnam13.jpg", 6),
("Hue Imperial Citadel Tour", "A historical tour exploring the ancient Imperial City, the Royal Tombs, and the famous Perfume River.", "2024-11-22", "2024-11-27", 6000000, "https://www.deluxegrouptours.vn/wp-content/uploads/2023/07/Dai-Noi-Hue-2.jpg", 10),
("Hue River Cruise", "Relax on a peaceful cruise along the Perfume River and visit the iconic Thien Mu Pagoda, a must-see landmark in Hue.", "2024-11-20", "2024-11-25", 4000000, "https://i.ytimg.com/vi/doltFP1L90U/maxresdefault.jpg", 10),
("Hue Culinary Tour", "Taste the best of Hue\'s royal cuisine, including specialties like Bun Bo Hue and delicious local street food.", "2024-11-25", "2024-11-29", 3500000, "https://res-tour.com/wp-content/uploads/2020/11/am-thuc-hue.jpg", 10),
("Phong Nha Cave Exploration", "Explore the world\'s largest cave, Son Doong, and other stunning caves in Phong Nha-Ke Bang National Park.", "2024-11-20", "2024-11-26", 12000000, "https://www.explorevietnam.com.vn/phong-nha/wp-content/uploads/2020/05/Phong-Nha-cave.jpg", 11),
("Phong Nha Eco Trekking", "A day of trekking through Phong Nha\'s lush national park, discovering waterfalls, caves, and unique karst landscapes.", "2024-11-22", "2024-11-25", 7000000, "https://localvietnam.com/wp-content/uploads/2021/04/phong-nha-jungle-trekking-1024x684.jpg", 11),
("Phong Nha Village Homestay", "Stay with a local family in Phong Nha and learn about the traditional ways of life in this beautiful region.", "2024-11-22", "2024-11-28", 5000000, "https://mrvivu.com/wp-content/uploads/2022/04/jungle-boss-homestay.jpeg", 11),
("Da Lat Flower Garden Tour", "Explore the beautiful flower gardens in Da Lat, known for its vibrant colors and diverse plant species.", "2024-11-21", "2024-11-26", 4500000, "https://kimtravel.com/wp-content/uploads/2018/05/Traveling-Dalat-during-flower-seasons-1-e1525684227910.jpg", 12),
("Da Lat Adventure Sports", "Experience adventure sports like canyoning, rock climbing, and hiking in the cool mountain air of Da Lat.", "2024-11-20", "2024-11-24", 8000000, "https://res.klook.com/image/upload/q_85/c_fill,w_563/activities/luqxj8nh0mokud1xul6h.jpg", 12),
("Da Lat French Architecture Tour", "Discover the French colonial heritage of Da Lat with a guided tour of its charming villas and unique architecture.", "2024-11-27", "2024-11-27", 5000000, "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/e6/8b/e7/the-french-quarter.jpg?w=900&h=-1&s=1", 12),
("Phu Yen Coastal Tour", "Explore the untouched beaches, rugged cliffs, and the stunning Da Dia Reef in Phu Yen, a hidden gem for beach lovers.", "2024-11-22", "2024-11-26", 4000000, "https://dulichtuoitreviet.vn/image/cache/catalog/tai-moi/1412/phu-yen-0x0.jpg", 13),
("Phu Yen Nature Trekking", "Trek through the natural beauty of Phu Yen, with its serene forests, mountains, and waterfalls.", "2024-11-25", "2024-11-25", 6000000, "https://vietnamoriginal-travel.com/upload/images/phu-yen-vietnam-robinson-island-Hoang-Minh-Duc.jpg", 13),
("Phu Yen Cultural Tour", "Learn about the culture and traditions of the Cham people, including visits to ancient temples and local markets in Phu Yen.", "2024-11-24", "2024-11-28", 4500000, "https://r-xx.bstatic.com/xdata/images/city/608x352/885864.webp?k=f96b8d01cd213b12f7fc232e37eb3870e881b68d22f57f87f3b487361255da34&o=", 13),
("Ho Chi Minh City Historical Tour", "A guided tour of the War Remnants Museum, Cu Chi Tunnels, and other landmarks highlighting Vietnam\'s modern history.", "2024-11-20", "2024-11-22", 7000000, "https://cdn.getyourguide.com/img/tour/abf315fc94a8cbb16fe572dff87c84d01ba9928a04c8e14043abfcc4ac90aeb0.jpg/146.jpg", 14),
("Ho Chi Minh City Nightlife Tour", "Experience the bustling nightlife of Ho Chi Minh City with a tour through the city\'s top bars, clubs, and street food stalls.", "2024-11-25", "2024-11-28", 3000000, "https://www.travelvietnam.com/images/things-do-do/ho-chi-minh-city/nguyen-hue-walking-street_07672.jpg", 14),
("Ho Chi Minh City Shopping Tour", "Shop for souvenirs and local goods at the famous Ben Thanh Market and surrounding areas in Ho Chi Minh City.", "2024-11-22", "2024-11-28", 3500000, "https://cdn.antoursvietnam.com/wp-content/uploads/2023/07/Shopping-in-Ho-Chi-Minh-City-AN-Tours-Vietnam.png", 14),
("Mui Ne Sand Dunes Tour", "Visit the striking red and white sand dunes in Mui Ne, one of Vietnam\'s most unique natural wonders.", "2024-11-22", "2024-11-22", 5000000, "https://daytripvietnam.com/wp-content/uploads/white-sand-dunes-ride-jeep.jpg", 15),
("Binh Thuan Cultural Heritage Tour", "Explore the cultural heritage of Binh Thuan, including the Cham ethnic culture and their ancient temples and ruins.", "2024-11-20", "2024-11-25", 4000000, "https://made-in-vietnam.com.vn/upload/product/unnamed-1-3844.jpg", 15),
("Binh Thuan Dragon Fruit Farm Tour", "Tour the famous dragon fruit plantations of Binh Thuan and learn about the cultivation of this exotic fruit.", "2024-11-25", "2024-11-28", 3500000, "https://statics.vinpearl.com/con-dao-snorkeling-05_1689345647.jpg", 15),
("Con Dao Island History Tour", "Visit the historic Con Dao Prison and learn about Vietnam\'s colonial past and revolutionary struggles.", "2024-11-20", "2024-11-24", 5000000, "https://dulichnhatrang24h.com/uploads/album/album_1604476456.jpg", 16),
("Con Dao Beach Tour", "Relax and unwind on the unspoiled beaches of Con Dao, with time for swimming, sunbathing, and exploring the island\'s natural beauty.", "2024-11-23", "2024-11-27", 4000000, "https://localvietnam.com/wp-content/uploads/2021/05/con-dao-island-hopping-2-1024x683.jpg", 16),
("Phu Quoc Island Tour", "Explore Phu Quoc\'s white-sand beaches, lush national parks, and visit the famous Vinpearl Safari.", "2024-11-22", "2024-11-26", 8000000, "https://media.tacdn.com/media/attractions-splice-spp-674x446/0a/08/b3/a0.jpg", 17),
("Phu Quoc Snorkeling and Diving", "Enjoy a day of snorkeling or diving in the crystal-clear waters of Phu Quoc, home to diverse marine life and coral reefs.", "2024-11-25", "2024-11-28", 10000000, "https://statics.vinpearl.com/phu-quoc-snorkeling-06_1692678187.jpg", 17),
("Phu Quoc Night Market Tour", "Stroll through the vibrant night markets of Phu Quoc and sample fresh seafood and local delicacies.", "2024-11-28", "2024-11-28", 3500000, "https://statics.vinpearl.com/phu-quoc-night-market-1_1695056160.jpg", 17),
("Can Tho Floating Market Tour", "A half-day boat tour through the famous Cai Rang Floating Market, experiencing life on the Mekong River.", "2024-11-22", "2024-11-27", 3000000, "https://canthorivertour.com/upload/admin/maphome.jpg", 18),
("Can Tho Orchard Visit", "Visit the lush fruit orchards in Can Tho and enjoy fresh local fruits in this peaceful rural setting.", "2024-11-25", "2024-11-28", 2500000, "https://www.cantho.gov.vn/wps/wcm/connect/4f83e1f2-a531-48d2-930a-1149f8ce3e2f/5/6.jpg?MOD=AJPERES&CACHEID=4f83e1f2-a531-48d2-930a-1149f8ce3e2f/5", 18),
("Can Tho Rural Exploration", "Discover the charming rural life of the Mekong Delta with a tour of local villages, farms, and tranquil waterways.", "2024-11-23", "2024-11-28", 3500000, "https://hieutour.com/public/upload/images/hinhsanpham/2-day-can-tho-rural-life---hib2dcc1-16791675504987.JPG", 18),
("Da Nang City Highlights", "A full-day tour of Da Nang\'s must-see sights, including the Marble Mountains, the Dragon Bridge, and My Khe Beach.", "2024-11-22", "2024-11-26", 6000000, "https://touringhighlights.com/wp-content/uploads/2020/07/Cau-Rong-Dragon-Bridge-Da-Nang-Vietnam.jpg", 7),
("Bana Hills and Golden Bridge", "A scenic tour to Bana Hills to see the famous Golden Bridge, featuring spectacular views and cultural experiences.", "2024-11-25", "2024-11-28", 8000000, "https://vmtravel.com.vn/wp-content/uploads/2022/06/Golden_Bridge.jpg", 7),
("Da Nang Street Food Tour", "Discover the best of Da Nang\'s street food scene, from grilled seafood to local specialties like Mi Quang and banh xeo.", "2024-12-01", "2024-12-07", 4000000, "https://media.tacdn.com/media/attractions-splice-spp-674x446/08/a6/f8/90.jpg", 7),
("Hoi An Ancient Town Tour", "Explore the UNESCO World Heritage Site of Hoi An, including its lantern-lit streets, ancient houses, and the famous Japanese Covered Bridge.", "2024-11-23", "2024-11-26", 5000000, "https://vmtravel.com.vn/wp-content/uploads/2022/08/Hue-to-hoi-an.jpg", 8),
("Hoi An Lantern Festival Tour", "Experience Hoi An\'s magical Lantern Festival, where the town is illuminated by colorful lanterns in celebration of traditional customs.", "2024-11-25", "2024-11-28", 6000000, "https://vietnamtour.in/wp-content/uploads/Hoi-An-Lantern-Festival-800x800.png", 8),
("Hoi An Cooking Class", "Learn how to prepare traditional Vietnamese dishes in a hands-on cooking class, guided by expert local chefs.", "2024-12-01", "2024-12-05", 4500000, "https://cdn.antoursvietnam.com/wp-content/uploads/2023/08/Hoi-An-Cooking-Class-Taste-of-Vietnamese-home-6.webp", 8),
("Nha Trang Beach Tour", "Relax and enjoy the turquoise waters and sandy beaches of Nha Trang on this full-day beach tour.", "2024-11-20", "2024-11-20", 4000000, "https://www.vietnam-tour.biz/wp-content/uploads/2022/02/Nha-Trang-beach-tour-operators-in-Vietnam.png", 9),
("Nha Trang Coral Reef Snorkeling", "Explore the vibrant coral reefs of Nha Trang with a guided snorkeling tour to see marine life up close.", "2024-11-23", "2024-11-27", 7000000, "https://www.nhatrangtouring.com/wp-content/uploads/2019/05/watch-colorful-coral-world.jpg", 9),
("Nha Trang City Tour", "Discover the city\'s top attractions including the Po Nagar Cham Towers, Long Son Pagoda, and Nha Trang Cathedral on a half-day tour.", "2024-11-23", "2024-11-26", 3000000, "https://dulichviet.com.vn/images/bandidau/review-lich-trinh-tham-quan-city-tour-nha-trang-cuc-hap-dan.png", 9);

INSERT INTO users (email, username, password, fullname, phone, created_date) VALUES 
("john.doe@gmail.com.com", "johndoe123", "482c811da5d5b4bc6d497ffa98491e38", "John Doe", "0901234567", "2024-11-10"),
("jane.smith@gmail.com.com", "janesmith456", "fc5e038d38a57032085441e7fe7010b0", "Jane Smith", "0907654321", "2024-11-11"),
("alice.green@gmail.com.com", "alicegreen789", "e10adc3949ba59abbe56e057f20f883e", "Alice Green", "0918765432", "2024-11-12"),
("bob.johnson@gmail.com.com", "bobjohnson322", "ddac64383be2fdb7e5e9327723b8eab5", "Bob Johnson", "0918765432", "2024-11-13"),
("emily.white@gmail.com.com", "emilywhite567", "e80b5017098950fc58aad83c8c14978e", "Emily White", "0908765432", "2024-11-14"),
("michael.brown@gmail.com.com", "mikebrown88", "49729e2136d4e56ef822b5f9cfdb45b4", "Michael Brown", "0912348765", "2024-11-15");

INSERT INTO reviews (detail, rating, review_date, user_id) VALUES
("The tour was amazing! The guide was very knowledgeable, and the sights were beautiful. I especially loved the visit to the ancient temples. Highly recommended!", 5, "2024-11-10", 1),
("The hotel room was clean and spacious, but the staff could have been friendlier. Overall, a good stay, but there\'s room for improvement.", 3, "2024-11-11", 2),
("I had a fantastic time on the Ha Long Bay cruise. The scenery was breathtaking, and the boat crew were excellent. It\'s a perfect way to relax and enjoy nature.", 4, "2024-11-12", 3),
("The food at the restaurant was delicious, but the service was a bit slow. I had to wait a while for my order to arrive, which was a little frustrating.", 3, "2024-11-13", 1),
("The app is easy to use and very intuitive. It helped me plan my trip perfectly, and I had no issues navigating through it. Definitely will use it again for future travels!", 5, "2024-11-14", 5);

