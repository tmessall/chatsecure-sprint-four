import Foundation

class NaoRobotService {
    let robotIP: String
    
    init(robotIP: String) {
        self.robotIP = robotIP
    }
    
    func makeRobotSay(text: String, completion: @escaping (Bool, Error?) -> Void) {
        let url = URL(string: "http://\(IP):5000/say")!
        var request = URLRequest(url: url)
        request.httpMethod = "POST"
        request.addValue("application/json", forHTTPHeaderField: "Content-Type")
        
        let payload: [String: Any] = ["text": text]
        request.httpBody = try? JSONSerialization.data(withJSONObject: payload, options: .prettyPrinted)
        
        URLSession.shared.dataTask(with: request) { data, response, error in
            guard error == nil else {
                completion(false, error)
                return
            }
            if let httpResponse = response as? HTTPURLResponse, httpResponse.statusCode == 200 {
                completion(true, nil)
            } else {
                completion(false, nil)
            }
        }.resume()
    }
}

// Usage:
let naoService = NaoRobotService(robotIP: "IP")
naoService.makeRobotSay(text: "") { success, error in
    if success {
        print("Robot Success")
    } else {
        print("Error:", error ?? "Unknown error")
    }
}

class SpotifyService {
    
    var accessToken: String
    
    init(accessToken: String) {
        self.accessToken = accessToken
    }
    
    func play() {
    }
    
    func pause() {
    }
    

}
