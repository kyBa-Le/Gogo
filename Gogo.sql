create database Gogo;
use Gogo;

create table cultural_location (
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
    CONSTRAINT fk_cuisines_location FOREIGN KEY (location_id) REFERENCES cultural_location(id)
);
create table events (
	id int AUTO_INCREMENT PRIMARY KEY,
    name nvarchar(255),
    event_date Date,
    description text,
    cultural_location_id int,
    image_url nvarchar(255),
    CONSTRAINT fk_events_location FOREIGN KEY (cultural_location_id)  REFERENCES cultural_location(id)
    
);

 create table dishes (
     id int AUTO_INCREMENT PRIMARY KEY,
     name nvarchar(255),
     description text,
     image_url nvarchar(255),
     cuisines_id int,
     CONSTRAINT fk_dishes_cuisines FOREIGN KEY (cuisines_id) REFERENCES cuisines(id)   
 );
 
 create table tour (
	id int AUTO_INCREMENT PRIMARY KEY,
     name nvarchar(255),
     description text,
     started_date date,
     completed_date date,
     price int,
     image_url nvarchar(255),
     cultural_location_id int,
     CONSTRAINT fk_tour_location FOREIGN KEY (cultural_location_id) REFERENCES cultural_location(id) 
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


INSERT INTO cultural_location (name, region, image_url, description) VALUES
('Hà Nội', 'Northern Vietnam', 'https://owa.bestprice.vn/images/destinations/uploads/trung-tam-thanh-pho-ha-noi-603da1f235b38.jpg', 'Vietnam’s capital city blends ancient temples, colonial architecture, and a bustling Old Quarter. Iconic landmarks include Hoan Kiem Lake, the Temple of Literature, and Ho Chi Minh Mausoleum.'),
('Hạ Long', 'Northern Vietnam', 'https://asiaholiday.com.vn/pic/Tour/Tour%20Du%20lich%20Ha%20Long%20(5)_2261_HasThumb.jpg', 'A UNESCO World Heritage Site, Ha Long Bay is famed for its emerald waters dotted with limestone karsts and caves. Cruises through the bay are a quintessential experience.'),
('Sa Pa', 'Northern Vietnam', 'https://media.baobinhphuoc.com.vn/upload/news/5_2023/c29efc89b1a8554f27a79a5bf6bdf6a0.jpg', 'Nestled in the northern mountains, Sa Pa is a trekking haven with terraced rice fields, ethnic minority villages, and stunning views of Mount Fansipan.'),
('Mai Châu', 'Northern Vietnam', 'https://mia.vn/media/uploads/blog-du-lich/mai-chau-hoa-binh-co-gi-1-1681688296.jpg', 'A peaceful valley surrounded by mountains, Mai Chau offers homestays with local Thai ethnic groups, bamboo forests, and scenic cycling paths.'),
('Ninh Bình', 'Northern Vietnam', 'https://cafefcdn.com/203337114487263232/2024/9/4/ninh-binh-2-17247693034201095070408-61-1725440596887-17254405970681798243927.jpg', 'Dubbed the “Halong Bay on land,” Ninh Binh features dramatic limestone cliffs, Tam Coc boat rides, and ancient temples like Bai Dinh Pagoda.'),
('Hà Giang', 'Northern Vietnam', 'https://vnmedia.vn/file/8a10a0d36ccebc89016ce0c6fa3e1b83/112023/ha_20231114082805.jpg', 'A remote and stunning mountainous region, Ha Giang is perfect for motorbike trips along the Dong Van Karst Plateau, ethnic markets, and breathtaking landscapes.'),
('Đà Nẵng', 'Central Vietnam', 'https://static-2.happynest.vn/storage/uploads/2024/06/15-dia-diem-du-lich-da-nang-dep-me-man-nam-2024_0.jpg', 'A modern coastal city with golden beaches, Da Nang offers attractions like the iconic Dragon Bridge and Marble Mountains. It’s also the gateway to Bana Hills and the Golden Bridge.'),
('Hội An', 'Central Vietnam', 'https://images2.thanhnien.vn/528068263637045248/2023/4/4/hoi-an-1680591517857660432696.jpg', 'This UNESCO World Heritage Site enchants visitors with its well-preserved ancient town, lantern-lit streets, and a rich culinary scene. Tailor shops and traditional wooden architecture are highlights.'),
('Nha Trang', 'Central Vietnam', 'https://dulichseatravel.com/wp-content/uploads/2023/10/duong-tran-phu-nha-trang-2_1651556571.jpg', 'A beach lover’s paradise, Nha Trang features turquoise waters, coral reefs, and luxury resorts. The city also offers vibrant nightlife and nearby attractions like Po Nagar Cham Towers.'),
('Huế', 'Central Vietnam', 'https://hotelnikkohanoi.com.vn/wp-content/uploads/2023/04/ban-do-du-lich-hue-1.jpg', 'The former imperial capital, Hue is known for its historic citadel, royal tombs, and pagodas. Perfume River cruises offer a serene way to explore its cultural heritage.'),
('Phong Nha', 'Central Vietnam', 'https://cdnmedia.baotintuc.vn/Upload/c2tvplmdloSDblsn03qN2Q/files/2023/03/07/du-lich-phong-nha-732023.jpg', 'A haven for adventurers, Phong Nha is home to the world’s largest cave, Son Doong, as well as stunning karst landscapes and underground rivers in Phong Nha-Ke Bang National Park.'),
('Đà Lạt', 'Central Vietnam', 'https://agotourist.com/wp-content/uploads/2021/10/thanh-pho-da-lat-2.jpg', 'Nicknamed the “City of Eternal Spring,” Da Lat is a romantic mountain retreat with cool weather, flower gardens, and French colonial architecture. It’s also popular for adventure sports.'),
('Phú Yên', 'Central Vietnam', 'https://ohdidi.vn/uploads/members/uyen.vo/du%20l%E1%BB%8Bch%20phu%20yen%20mua%20nao%20d%E1%BA%B9p/du-lich-phu-yen-mua-nao-dep%202.png', 'An emerging destination, Phu Yen captivates with its unspoiled beaches, rugged cliffs, and the iconic Da Dia Reef. It’s perfect for nature lovers seeking tranquility.'),
('Thành phố Hồ Chí Minh', 'Southern Vietnam', 'https://www.visithcmc.vn/uploads/0000/6/2021/08/22/hcmc-1120046774-1.jpg', 'Vietnam’s bustling economic hub offers a mix of historical landmarks like the War Remnants Museum and Cu Chi Tunnels alongside modern skyscrapers. Known for vibrant nightlife, craft beer scenes, and bustling street markets, it’s a must-visit for urban explorers.'),
('Bình Thuận', 'Southern Vietnam', 'https://mia.vn/media/uploads/blog-du-lich/du-lich-binh-thuan-01-1695999943.jpg', 'Famous for its serene beaches in Mui Ne and striking red sand dunes, Binh Thuan offers a quiet escape. The region is also known for dragon fruit plantations and Cham cultural heritage.'),
('Côn Đảo', 'Southern Vietnam', 'https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2022/9/24/1096833/Hon-Bay-Canh---Yeudu.jpg', "An archipelago of pristine islands with turquoise waters and coral reefs, Con Dao is perfect for snorkeling, diving, and exploring untouched beaches. Its historical sites, like the Con Dao Prison, provide a glimpse into Vietnam\'s colonial past."),
('Phú Quốc', 'Southern Vietnam', 'https://ik.imagekit.io/tvlk/blog/2024/08/thoi-tiet-phu-quoc-7.jpg?tr=dpr-2,w-675', "Known as Pearl Island, Phu Quoc boasts white-sand beaches, lush national parks, and vibrant night markets. It\'s ideal for luxury resorts and adventurous activities like snorkeling and trekking."),
('Cần Thơ', 'Southern Vietnam', 'https://vnexplores.vn/uploads/0000/6/2024/09/01/cantho.jpg', 'The heart of the Mekong Delta, Can Tho is famous for its floating markets like Cai Rang, where you can shop on boats and experience river life. The region is also rich in lush orchards and rural charm.'),
('Châu Đốc', 'Southern Vietnam', 'https://cdn.tgdd.vn/Files/2022/03/29/1422960/kinh-nghiem-du-lich-chau-doc-tat-tan-tat-tu-a-z-202203292333393564.jpg', "Located near the Cambodian border, Chau Doc is a cultural melting pot. It\'s known for Sam Mountain, Tra Su Cajuput Forest, and vibrant floating villages.");


INSERT INTO cuisines (name, description, image_url, location_id) VALUES
('Phở', 'A famous Vietnamese noodle soup made with a flavorful broth, rice noodles, herbs, and typically beef (phở bò) or chicken (phở gà). It’s often served with fresh herbs, bean sprouts, lime, and chili on the side.', 'https://dienmaynewsun.com/wp-content/uploads/2019/08/cong-thuc-nuoc-dung-pho.webp', 1),
('Bánh Mì', 'A Vietnamese sandwich consisting of a baguette filled with a variety of ingredients like meats (usually pork, chicken, or beef), pickled vegetables, cilantro, cucumber, and spicy condiments. It combines French influences with Vietnamese flavors.', 'https://i.ytimg.com/vi/h5eq9yfMAKs/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDmoMZWzKJ_6kKQtcO7xgKZXrBGNQ', 2),
('Cơm Tấm', 'Known as "broken rice," this dish is served with grilled pork (often ribs or shredded pork), but can also include fried egg, pickled vegetables, and a side of fish sauce, making it a flavorful and hearty meal.', 'https://cafebiz.cafebizcdn.vn/162123310254002176/2022/12/7/com-tam-suon-bi-cha-trung-anh-hoa-quynh-nguyen-1670317945936565526419-1670385940206-16703859407121546487016-1670395722685-16703957227611562343004.jpg', 3),
('Bún Bò Huế', 'A spicy, aromatic beef noodle soup originating from Huế, Vietnam. It features a rich broth made with lemongrass and chili, served with rice noodles, tender beef, and sometimes pork, accompanied by fresh herbs.', 'https://static.vinwonders.com/production/bun-bo-hue-ngon-o-sai-gon-2.jpg', 3),
('Cao Lầu', 'A signature dish from Hội An, consisting of thick noodles served with slices of pork, crispy croutons, fresh herbs, and a small amount of broth. The noodles are made with water from a specific well in Hội An, giving them a unique texture.', 'https://cdn.tgdd.vn/2021/12/CookDishThumb/cao-lau-la-gi-nguon-goc-cao-lau-cao-lau-va-mi-quang-khac-nhau-thumb-620x620.jpg', 5),
('Cơm Gà', 'A Vietnamese chicken rice dish, typically made with steamed or boiled chicken served with fragrant rice cooked in chicken broth, accompanied by fresh vegetables, herbs, and often a side of dipping sauce.', 'https://static.vinwonders.com/2023/02/com-ga-da-nang-2.jpeg', 1),
('Mì Quảng', 'A noodle dish from Quảng Nam province, featuring wide rice noodles served with a small amount of broth, shrimp, pork, or chicken, and topped with peanuts, herbs, and crispy rice crackers. It’s typically enjoyed with a strong, savory flavor.', 'https://hoianheritage.net/uploads/trao-doi-chuyen-nganh/2022_08/mi-quang-hoi-an-ngon.jpg', 7),
('Bánh Xèo', 'Vietnamese savory pancakes made with rice flour, turmeric, and coconut milk. They are filled with a variety of ingredients such as shrimp, pork, bean sprouts, and onions, and are often eaten wrapped in lettuce with herbs and dipped in fish sauce.', 'https://www.andy-cooks.com/cdn/shop/articles/20240406030532-andy-20cooks-20-20banh-20xeo.jpg?v=1712382159', 8),
('Bún Chả', 'A grilled pork dish served with rice noodles, fresh herbs, and a sweet-sour dipping sauce. The pork is grilled and served alongside crispy fried pork meatballs. It is a popular dish in Hanoi.', 'https://media-cdn-v2.laodong.vn/storage/newsportal/2023/7/1/1211359/Bun-Cha-Quat.jpeg?w=800&crop=auto&scale=both', 6),
('Xôi', 'A traditional sticky rice dish often eaten for breakfast or as a snack. It can be served with a variety of toppings, such as mung beans, fried shallots, shredded coconut, or pork.', 'https://beptruong.edu.vn/wp-content/uploads/2015/11/xoi-xeo-ha-noi.jpg', 10),
('Bánh Bèo', 'Small, round rice cakes topped with shrimp, fried onions, and herbs, often served with fish sauce. It’s a popular snack or appetizer in central Vietnam.', 'https://static.vinwonders.com/2022/10/banh-beo-da-nang-1.jpg', 11),
('Bún Riêu', 'A Vietnamese noodle soup made with a tomato-based broth, rice noodles, and crab or pork. It’s typically topped with fried tofu, shrimp, and fresh herbs.', 'https://i.ytimg.com/vi/C1P1Cw9J1-I/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLD7gErv1KKy_4KmD2kg-CboPePusQ', 7),
('Gỏi Cuốn', 'Vietnamese spring rolls made with rice paper and filled with shrimp, fresh herbs, rice noodles, and lettuce. They are typically served with a peanut or hoisin-based dipping sauce.', 'https://upload.wikimedia.org/wikipedia/commons/0/01/Goi_Cuon_VN.jpg', 13),
('Hủ Tiếu Nam Vang', 'A noodle soup that originated from Phnom Penh, Cambodia, but is widely popular in southern Vietnam. It consists of clear broth, rice noodles, and various meats, such as pork, shrimp, and sometimes organ meats.', 'https://danangtoiyeu.com/wp-content/uploads/2024/04/hu-tieu-nam-vang-da-nang-4.png', 2),
('Chả Cá', 'A Hanoi specialty made from marinated fish (usually catfish or other white fish) grilled or pan-fried and served with noodles, herbs, and peanuts, often topped with a rich turmeric-based sauce.', 'https://anbieneatery.com/wp-content/uploads/2021/06/IMG_0054-e1629126304958.jpg', 15),
('Nộm Hoa Chuối', 'A type of Vietnamese salad made with banana flowers, herbs, and often mixed with shredded chicken or pork. It’s typically dressed with fish sauce and lime, giving it a tangy and refreshing flavor.', 'https://i-giadinh.vnecdn.net/2021/10/13/nomhoachuoi-1634112383-3141-1634112478.png', 5),
('Bánh Cuốn', 'Steamed rice rolls filled with a savory mixture of minced pork, mushrooms, and onions. The rolls are often served with fried shallots, fresh herbs, and a dipping sauce made with fish sauce.', 'https://dienmaynewsun.com/wp-content/uploads/2023/05/banh-cuon-ngon.jpg', 10),
('Bún Bò Cuốn Lá Lốt', 'A dish made with grilled beef wrapped in betel leaves, then served with rice noodles, fresh herbs, and a side of fish sauce. The betel leaves give the meat a unique, aromatic flavor.', 'https://beptruong.edu.vn/wp-content/uploads/2018/05/bo-nuong-la-lot.jpg', 6),
('Chè', 'A Vietnamese dessert made from a variety of ingredients like beans, tapioca pearls, fruits, and sweetened coconut milk. It can be served hot or cold and is often enjoyed as a refreshing treat.', 'https://danviet.mediacdn.vn/296231569849192448/2021/12/2/che-hoi-an-1638414830708721416189.jpg', 8);

INSERT INTO events (name, event_date, description, cultural_location_id, image_url) VALUES
('Huế Festival', '2024-04-01', 'A cultural festival showcasing traditional Vietnamese art, music, and dance, as well as reenactments of Nguyễn Dynasty rituals.', 1 ,'https://media.techcity.cloud/hue/2024/07/Tuan-le-Festival-Hue-2022.jpg'),
('Hội Lim Festival', '2024-02-01', 'Known for its Quan họ folk singing, this festival celebrates love duets and traditional games in the Kinh Bắc region.', 2 ,'https://media-cdn-v2.laodong.vn/storage/newsportal/2024/2/19/1305522/Hoi-Lim.jpg'),
('Hà Nội International Film Festival', '2024-10-01', 'A gathering of filmmakers from Vietnam and abroad, featuring screenings, workshops, and awards to promote Vietnamese cinema.', 3 ,'https://media.vov.vn/sites/default/files/styles/large/public/2024-07/ntt_7815_0.jpg'),
('Giỗ Tổ Hùng Vương', '2024-04-01', 'A tribute to the Hùng Kings, the legendary founders of Vietnam, with parades, ceremonies, and traditional games.', 4 ,'https://images.baodantoc.vn/uploads/2021/Th%C3%A1ng%202/Ng%C3%A0y_24/Thanh/cac-nghi-le-chinh-trong-ngay-gio-to-hung-vuong.jpg'),
('Hội An Lantern Festival', '2024-05-14', 'The ancient town glows with colorful lanterns as locals and visitors release paper lanterns on the Thu Bồn River for good luck.', 3 ,'https://data.agatetravel.com/images/photogallery/2020/hoi-an-lantern-festival-vietnam.jpg'),
('Đà Nẵng International Fireworks Festival', '2024-06-01', 'Teams from various countries compete in spectacular fireworks displays, set to music and lighting, along the Han River.', 6 ,'https://image.vietnam.travel/sites/default/files/styles/top_banner/public/2024-06/diff-2023-voi-nhung-man-trinh-dien-phao-hoa-ruc-ro-17117048707811543253126.jpg?itok=6xR0Rn05'),
('Tây Sơn Festival', '2024-02-01', 'Celebrates the Tây Sơn uprising led by Emperor Quang Trung, featuring martial arts performances and traditional drumming.', 4 ,'https://file.hstatic.net/200000735203/article/le-hoi-dong-da-tay-son-binh-dinh_c714fbe7681049e0bb39d1132787a901.jpg'),
('Whale Festival', '2024-08-01', 'Fishermen honor the whale as a sacred guardian of the sea, with ceremonies, processions, and offerings for safe voyages.', 6 ,'https://nguoiduatin.mediacdn.vn/thumb_w/642/media/ton-duc-vy/2020/01/15/3-2.jpg'),
('Lễ hội chọi trâu Đồ Sơn', '2024-09-01', 'A traditional buffalo fighting festival in Đồ Sơn, Hải Phòng, where buffaloes compete in a fight, attracting thousands of visitors.', 2 ,'https://cdn.haiphong.gov.vn/gov-hpg/SiteFolders/sodulich/6293/tintuc/2024/9/image638630482819731226.jpeg'),
('Lễ hội hoa Đà Lạt', '2024-01-01', 'A festival showcasing the vibrant flower culture of Đà Lạt, with flower exhibitions, parades, and performances.', 5,'https://bazantravel.com/cdn/medias/uploads/36/36342-vuon-hoa-da-lat-bazan-travel-1.jpg'),
('Lễ hội rằm tháng Giêng', '2024-01-15', 'A festival celebrating the first full moon of the lunar year, with various cultural activities and a focus on spiritual rituals.', 3 ,'https://afamilycdn.com/2018/3/1/15-15199205380961830948326.jpg'),
('Lễ hội Cầu Ngư', '2024-03-01', 'A festival held by fishermen in central Vietnam, praying for a bountiful catch, good health, and peaceful seas.', 6 ,'https://baokhanhhoa.vn/file/e7837c02857c8ca30185a8c39b582c03/dataimages/201905/original/images5362312_caungu_3.jpg'),
('Lễ hội Tết Trung Thu', '2024-09-15', 'A children’s festival celebrated on the 15th day of the 8th lunar month, with lanterns, mooncakes, and traditional games.', 1 ,'https://images.vietnamtourism.gov.vn/vn/images/Quatrungthu.jpg');

INSERT INTO dishes (name, description, image_url, cuisines_id) VALUES
('Phở Bò', 'A Vietnamese beef noodle soup served with rice noodles in a rich, flavorful broth, typically garnished with herbs, bean sprouts, and lime.', 'https://duonggiahotel.vn/wp-content/uploads/2023/09/quan-pho-da-nang.jpg', 1),
('Bánh Mì Thịt Nướng', 'A Vietnamese sandwich with grilled pork, pickled vegetables, and cilantro in a French baguette.', 'https://kvi.vn/Uploads/786/images/file_restaurant_photo_nfos_16608-a5edadfe-220818150324.jpg', 2),
('Cơm Tấm Sườn', 'A popular Vietnamese dish with broken rice, grilled pork chops, pickled vegetables, and a side of fish sauce.', 'https://bigtop.vn/wp-content/uploads/2022/11/Com-Tam-Suon-Cong-3.jpg', 3),
('Bún Bò Huế', 'A spicy beef noodle soup with lemongrass, chili, and tender beef slices, originating from the city of Huế.', 'https://bizweb.dktcdn.net/100/442/328/files/bun-bo-hue-dac-san-dan-da-lam-say-long-biet-bao-thuc-khach-4.jpg?v=1638937219225', 3),
('Cao Lầu Hội An', 'A unique noodle dish from Hội An, featuring thick noodles, grilled pork, crispy croutons, and fresh herbs.', 'https://statics.vinpearl.com/cao-lau-hoi-an-01_1631078817.jpg', 5),
('Gà Nướng Mật Ong', 'Grilled chicken glazed with honey, served with rice and fresh vegetables.', 'https://amthucvanho.com.vn/wp-content/uploads/2019/12/lam-ga-nuong-mat-ong-thom-nuc-mui-cho-dem-giang-sinh-am-ap.jpg', 1),
('Mì Quảng Tôm', 'A noodle dish from Quảng Nam with a small amount of broth, shrimp, herbs, and crispy rice crackers.', 'https://helenrecipes.com/wp-content/uploads/2021/05/Screenshot-2021-05-31-142423-1024x576.png', 7),
('Bánh Xèo Sài Gòn', 'Vietnamese savory pancakes made with rice flour and turmeric, filled with shrimp, pork, and bean sprouts, served with lettuce and herbs.', 'https://static.vinwonders.com/production/banh-xeo-sai-gon-banner.jpg', 8),
('Bún Chả Hà Nội', 'Grilled pork served with rice noodles, herbs, and a dipping sauce, popular in Hanoi.', 'https://thenguyen.vn/files/products/product_1831/bun-cha-ha-noi-chi-lay-ba-roi.jpg', 6),
('Chè Ba Màu', 'A traditional Vietnamese dessert with layers of green mung bean, red beans, and coconut milk, served cold.', 'https://takestwoeggs.com/wp-content/uploads/2021/09/Che%CC%80-Ba-Ma%CC%80u-Vietnamese-three-colored-dessert-Takestwoeggs-Final-SQ.jpg', 8),
('Nộm Gà', 'A refreshing Vietnamese salad made with shredded chicken, banana flowers, herbs, and lime.', 'https://giadinh.mediacdn.vn/296230595582509056/2022/11/7/nom-ga-xe-phay-1667791826652-1667791826978214972110.jpg', 5),
('Chả Cá Lã Vọng', 'A famous Hanoi dish with grilled fish served with vermicelli, fresh herbs, and a turmeric-based sauce.', 'https://icdn.24h.com.vn/upload/4-2022/images/2022-12-01/1669861237-che1baa3cc3a1lc483ng-1669563905610-166956390586391225552-width680height454.jpg', 15),
('Bánh Cuốn Hà Nội', 'Steamed rice rolls filled with minced pork, mushrooms, and herbs, topped with fried shallots and served with fish sauce.', 'https://cdn.attractionsvietnam.com/uploads/2023/12/quan-banh-cuon-hanoi.jpg', 10),
('Bún Riêu Cua', 'A Vietnamese noodle soup made with a crab-based broth, rice noodles, and topped with fried tofu and shrimp.', 'https://i.ytimg.com/vi/C1P1Cw9J1-I/maxresdefault.jpg', 7);

INSERT INTO tour (name, description, started_date, completed_date, price, image_url, cultural_location_id) 
VALUES 
('Hà Nội City Exploration', 'A 3-day tour of Hanoi, exploring the city’s rich history, culture, and famous landmarks such as the Hoàn Kiếm Lake, Old Quarter, and Temple of Literature.', '2024-11-24', '2024-11-23', 7680000, 'https://veronikasadventure.com/wp-content/uploads/2024/01/explore-the-best-of-hanoi-city-in-a-day.jpg', 1),
('Hạ Long Bay Adventure', 'A 2-day cruise in the stunning Hạ Long Bay, featuring boat tours, kayaking, and swimming in one of Vietnam’s most famous UNESCO World Heritage Sites.', '2024-11-25', '2024-11-26', 4320000, 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/07/86/45/53.jpg', 2),
('Sài Gòn City Discovery', 'A 5-day journey through Hồ Chí Minh City, visiting the War Remnants Museum, Cu Chi Tunnels, and Ben Thanh Market, plus a day trip to the Mekong Delta.', '2024-11-26', '2024-11-23', 7680000, 'https://mediaim.expedia.com/localexpert/519150/ad5517c6-b9a1-4c48-ae72-16743e227b95.jpg?impolicy=resizecrop&rw=1005&rh=565', 3),
('Sa Pa Trekking Tour', 'A 4-day trek through the scenic mountains of Sapa, including visits to ethnic minority villages, terraced rice fields, and local markets.', '2024-11-27', '2024-11-24', 6600000, 'https://dragonkingtravel.vn/wp-content/uploads/2023/03/caption.jpg', 4),
('Nha Trang Beach Escape', 'A relaxing 6-day tour of Nha Trang, featuring beach activities, scuba diving, and sightseeing tours of the Po Nagar Cham Towers and Long Son Pagoda.', '2024-11-28', '2024-11-25', 8400000, 'https://www.indochinavoyages.com/wp-content/uploads/2024/02/Nha-Trang-beach.jpg', 5),
('Huế Heritage Tour', 'A 3-day historical tour of Hue, visiting the Imperial City, Tomb of Minh Mang, and the Perfume River with a boat ride to explore local temples.', '2024-11-29', '2024-11-26', 5280000, 'https://cdn.getyourguide.com/img/tour/eb412aebeecb026534b128bc520e70071b6da3aa04e55fa479065c5245802cf3.jpg/98.jpg', 6),
('Phong Nha Cave Exploration', 'A 4-day adventure through Phong Nha-Kẻ Bàng National Park, including a guided tour of the Son Doong Cave, the largest cave in the world.', '2024-11-30', '2024-11-27', 10800000, 'https://namtravel.com.vn/files/images/tours/phong%20nha.jpg', 5),
('Mekong Delta Floating Market', 'A 2-day cultural tour of the Mekong Delta, including visits to floating markets, traditional villages, and local workshops.', '2024-12-01', '2024-11-28', 6600000, 'https://statics.vinpearl.com/mekong-delta-floating-market-02_1687416561.jpg', 8),
('Phú Quốc Island Getaway', 'A 5-day luxury stay on Phú Quốc Island, enjoying pristine beaches, water sports, and visits to Vinpearl Safari and the Dinh Cau Night Market.', '2024-12-02', '2024-11-29', 5280000, 'https://www.agoda.com/wp-content/uploads/2024/03/Featured-image-An-Thoi-Harbour-In-Phu-Quoc-Island-Vietnam-1244x700.jpg', 9),
('Hội An Ancient Town and Beach', 'A 4-day tour exploring Hội An’s UNESCO-listed Old Town and relaxing at An Bàng Beach. The tour includes a cooking class and lantern-making workshop.', '2024-12-03', '2024-11-30', 10800000, 'https://statics.vinpearl.com/hoi-an-ancient-town_1648356190.jpg', 3);

INSERT INTO users (email, username, password, fullname, phone, created_date) 
VALUES 
('john.doe@gmail.com.com', 'johndoe123', '482c811da5d5b4bc6d497ffa98491e38', 'John Doe', '0901234567', '2024-11-10'),
('jane.smith@gmail.com.com', 'janesmith456', 'fc5e038d38a57032085441e7fe7010b0', 'Jane Smith', '0907654321', '2024-11-11'),
('alice.green@gmail.com.com', 'alicegreen789', 'e10adc3949ba59abbe56e057f20f883e', 'Alice Green', '0918765432', '2024-11-12'),
('bob.johnson@gmail.com.com', 'bobjohnson322', 'ddac64383be2fdb7e5e9327723b8eab5', 'Bob Johnson', '0918765432', '2024-11-13'),
('emily.white@gmail.com.com', 'emilywhite567', 'e80b5017098950fc58aad83c8c14978e', 'Emily White', '0908765432', '2024-11-14'),
('michael.brown@gmail.com.com', 'mikebrown88', '49729e2136d4e56ef822b5f9cfdb45b4', 'Michael Brown', '0912348765', '2024-11-15');

INSERT INTO reviews (detail, rating, review_date, user_id) 
VALUES
('The tour was amazing! The guide was very knowledgeable, and the sights were beautiful. I especially loved the visit to the ancient temples. Highly recommended!', 5, '2024-11-10', 1),
('The hotel room was clean and spacious, but the staff could have been friendlier. Overall, a good stay, but there’s room for improvement.', 3, '2024-11-11', 2),
('I had a fantastic time on the Halong Bay cruise. The scenery was breathtaking, and the boat crew were excellent. It’s a perfect way to relax and enjoy nature.', 4, '2024-11-12', 3),
('The food at the restaurant was delicious, but the service was a bit slow. I had to wait a while for my order to arrive, which was a little frustrating.', 3, '2024-11-13', 1),
('The app is easy to use and very intuitive. It helped me plan my trip perfectly, and I had no issues navigating through it. Definitely will use it again for future travels!', 5, '2024-11-14', 5);

